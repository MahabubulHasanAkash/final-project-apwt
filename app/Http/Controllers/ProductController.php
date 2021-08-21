<?php

namespace App\Http\Controllers;

use App\Models\Creative;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        $from = date($request->from);
        $to = date($request->to);
        $st = $request->status ?? "";

        if ($request->from) {
            $creatives = Creative::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->where('status', $st)
                ->get();
            return view('pages.information.product', ['creatives' => $creatives, 'from' => $from, 'to' => $to, 'st' => $st]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $creatives = Creative::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        return view('pages.information.product', ['creatives' => $creatives, 'from' => $from, 'to' => $to, 'st' => $st]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);
        $st = $request->status ?? "";

        if ($request->from) {
            $creatives = Creative::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->where('status', $st)
                ->get();
            return view('pages.information.product', ['creatives' => $creatives, 'from' => $from, 'to' => $to, 'st' => $st]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $creatives = Creative::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        return view('pages.information.product', ['creatives' => $creatives, 'from' => $from, 'to' => $to, 'st' => $st]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // dd($request);
        $from = date($request->from);
        $to = date($request->to);
        $st = $request->status ?? "";

        if ($request->from) {
            return Creative::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->where('status', $st)
                ->get();
              }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        return Creative::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
