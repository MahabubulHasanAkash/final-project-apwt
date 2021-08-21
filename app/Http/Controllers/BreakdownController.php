<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use Illuminate\Http\Request;
use App\Models\Creative;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BreakdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        if ($from) {
            $creatives = Creative::select(DB::raw('status'), DB::raw("COUNT(*) as count"))
                ->whereBetween('created_at', [$from, $to])
                ->groupBy("status")
                ->get();

            $datas = [];
            foreach ($creatives as $index => $creat) {
                $ff = new Breakdown();
                $ff->name = $creat->status == 1 ? "Available" : "Out Of Stock";
                $ff->y = $creat->count;
                $ff->drilldown = $creat->status == 1 ? "Available" : "Out Of Stock";

                $datas[$index] = $ff;
            }

            return view('pages.brackdown.product_brackdown', ['creatives' => $datas, 'from' => $from, 'to' => $to]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        if ($from) {
            $creatives = Creative::select(DB::raw('status'), DB::raw("COUNT(*) as count"))
                ->whereBetween('created_at', [$from, $to])
                ->groupBy("status")
                ->get();

            $datas = [];
            foreach ($creatives as $index => $creat) {
                $ff = new Breakdown();
                $ff->name = $creat->status == 1 ? "Available" : "Out Of Stock";
                $ff->y = $creat->count;
                $ff->drilldown = $creat->status == 1 ? "Available" : "Out Of Stock";

                $datas[$index] = $ff;
            }

            return ['creatives' => $datas, 'from' => $from, 'to' => $to];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function edit(Breakdown $breakdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breakdown $breakdown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breakdown $breakdown)
    {
        //
    }
}
