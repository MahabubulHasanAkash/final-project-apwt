<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Nft;
use App\Http\Requests\BidRequest;

class nftController extends Controller
{
    public function index($id)
    {
        if ($id == 1) {
            $nfts = DB::table('nft')
                ->where('type', 'Fractal/Algorithmic Art')
                ->get();
            return view('creator.home')->with('nfts', $nfts);
        } else if ($id == 2) {
            $nfts = DB::table('nft')
                ->where('type', 'Data-Moshing')
                ->get();
            return view('creator.home')->with('nfts', $nfts);
        } elseif ($id == 3) {
            $nfts = DB::table('nft')
                ->where('type', '2D Computer Graphics')
                ->get();
            return view('creator.home')->with('nfts', $nfts);
        } elseif ($id == 4) {
            $nfts = DB::table('nft')
                ->where('type', '3D Computer Graphics')
                ->get();
            return view('creator.home')->with('nfts', $nfts);
        } elseif ($id == 5) {
            $nfts = DB::table('nft')
                ->where('type', 'Pixel Art')
                ->get();
            return view('creator.home')->with('nfts', $nfts);
        } elseif ($id == 6) {
            $nfts = DB::table('nft')
                ->where('type', 'Dynamic Painting')
                ->get();
            return view('creator.home')->with('nfts', $nfts);
        } else return back();
    }


    public function creations($id)
    {
        $nfts = DB::table('nft')
            ->where('creator_id', $id)
            ->get();
        return view('creator.creations')->with('nfts', $nfts);
    }

    public function collections($id)
    {
        $nfts = DB::table('nft')
            ->where('owner_id', $id)
            ->get();
        return view('creator.collections')->with('nfts', $nfts);
    }



    public function details($id)
    {
        $nft = Nft::find($id);
        return view("creator.details", $nft);
    }

    public function add(BidRequest $req, $id, $cid)
    {

        static $bidcount = 5;
        static $maxvalue = 0;
        $bid = $req->bid;

        if ($bid > $maxvalue && $bidcount < 5) {
            $bidcount = $bidcount + 1;
            $maxvalue = $bid;
            $req->session()->put('bidcount', 6);
            $req->session()->put('mxvalue', $maxvalue);
            return back();
        } else {
            $token =  Hash::make(time() . rand(0, 100000));
            $creation = DB::table('creation')
                ->where('id', $cid)
                ->get()
                ->first();


            DB::table('nft')->insert(
                array(
                    'creator_id' => $creation->creator_id,
                    'owner_id' => session('userid'),
                    'name' => $creation->name,
                    'desc' => $creation->description,
                    'creation_date' => date('Y-m-d H:i:s'),
                    'edition' => $creation->edition,
                    'token' => $token,
                    'value' => $bid,
                    'image' => $creation->image,
                    'type' => $creation->type,
                )
            );

            $buyerWallet = DB::table('wallet')
                ->where('id', session('userid'))
                ->get()
                ->first();

            $sellerWallet = DB::table('wallet')
                ->where('id',  $creation->creator_id)
                ->get()
                ->first();



            if ($buyerWallet->balance -  session('mxvalue') > 0) {
                $buyerWallet->balance = $buyerWallet->balance - session('mxvalue');
                $sellerWallet->balance = $sellerWallet->balance + session('mxvalue');

                DB::table('wallet')
                    ->where('id', $buyerWallet->id)
                    ->update(['balance' =>  $buyerWallet->balance]);

                DB::table('wallet')
                    ->where('id', $sellerWallet->id)
                    ->update(['balance' =>  $sellerWallet->balance]);
            }
            DB::table('ledger')->insert(
                array(
                    'datetimestamp' => date('Y-m-d H:i:s'),
                    'senderKey' => $buyerWallet->accountKey,
                    'receverKey' => $sellerWallet->accountKey,
                    'block' => $token,
                    'amount' => $bid,
                )
            );
            DB::table('auction')
                ->where('id', $id)
                ->delete();
        }

        return back();
    }

    public function sell(Request $req, $id, $cid)
    {

        $store =  DB::table('store')
            ->where('creation_id', $cid)
            ->get()
            ->first();


        $token =  Hash::make(time() . rand(0, 100000));
        $creation = DB::table('creation')
            ->where('id', $cid)
            ->get()
            ->first();


        DB::table('nft')->insert(
            array(
                'creator_id' => $creation->creator_id,
                'owner_id' => $id,
                'name' => $creation->name,
                'desc' => $creation->description,
                'creation_date' => date('Y-m-d H:i:s'),
                'edition' => $creation->edition,
                'token' => $token,
                'value' => $store->value,
                'image' => $creation->image,
                'type' => $creation->type,
            )
        );

        $buyerWallet = DB::table('wallet')
            ->where('id', session('userid'))
            ->get()
            ->first();

        $sellerWallet = DB::table('wallet')
            ->where('id',  $creation->creator_id)
            ->get()
            ->first();



        if ($buyerWallet->balance -  session('mxvalue') > 0) {
            $buyerWallet->balance = $buyerWallet->balance - session('mxvalue');
            $sellerWallet->balance = $sellerWallet->balance + session('mxvalue');

            DB::table('wallet')
                ->where('id', $buyerWallet->id)
                ->update(['balance' =>  $buyerWallet->balance]);

            DB::table('wallet')
                ->where('id', $sellerWallet->id)
                ->update(['balance' =>  $sellerWallet->balance]);
        }

        DB::table('ledger')->insert(
            array(
                'datetimestamp' => date('Y-m-d H:i:s'),
                'senderKey' => $buyerWallet->accountKey,
                'receverKey' => $sellerWallet->accountKey,
                'block' => $token,
                'amount' => $store->value,
            )
        );
        DB::table('store')
            ->where('id', $id)
            ->delete();

        return back();
    }
}
