<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);

        if ($request->from) {
            $inventory = Inventory::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();
            return view('pages.information.inventory', ['inventory' => $inventory, 'from' => $from, 'to' => $to]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $inventory = Inventory::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        return view('pages.information.inventory', ['inventory' => $inventory, 'from' => $from, 'to' => $to]);
    
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

        if ($request->from) {
            $inventory = Inventory::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();
            return view('pages.information.inventory', ['inventory' => $inventory, 'from' => $from, 'to' => $to]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $inventory = Inventory::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        return view('pages.information.inventory', ['inventory' => $inventory, 'from' => $from, 'to' => $to]);
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
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);

        if ($request->from) {
            $inventory = Inventory::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();
            return ['inventory' => $inventory, 'from' => $from, 'to' => $to];
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $inventory = Inventory::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        return ['inventory' => $inventory, 'from' => $from, 'to' => $to];
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
