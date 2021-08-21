<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SalesReportController extends Controller
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
            $sales = Sales::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();

            // dd($sales);
            $total = $sales
                ->sum(function ($t) {
                    return $t->unit * $t->unit_price;
                });
            return view('pages.information.sales', ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $sales = Sales::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        $total = $sales->sum(function ($t) {
            return $t->unit * $t->unit_price;
        });
        return view('pages.information.sales', ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total]);
    }

    public function show(Request $request){
        $from = date($request->from);
        $to = date($request->to);

        if ($request->from) {
            $sales = Sales::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();
            $total = $sales
                ->sum(function ($t) {
                    return $t->unit * $t->unit_price;
                });
            return ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total];
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $sales = Sales::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        $total = $sales->sum(function ($t) {
            return $t->unit * $t->unit_price;
        });
        return ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total];
    }



    public function search(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);

        if ($request->from) {
            $sales = Sales::select("*")
                ->whereBetween('created_at', [$from, $to])
                ->get();

            // dd($sales);
            $total = $sales
                ->sum(function ($t) {
                    return $t->unit * $t->unit_price;
                });
            return view('pages.information.sales', ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total]);
        }

        $from = Carbon::now()->startOfMonth()->subMonth(1);
        $to = Carbon::now()->startOfMonth();

        $sales = Sales::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();
        $total = $sales->sum(function ($t) {
            return $t->unit * $t->unit_price;
        });
        return view('pages.information.sales', ['sales' => $sales, 'from' => $from, 'to' => $to, 'total' => $total]);
    }

    public function demand()
    {
        return view('pages.information.demand');
    }

    public function sales_report()
    {
        $sales = Sales::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = Sales::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months as $index => $month) {
            $datas[$month] = $sales[$index];
        }

        return view('pages.brackdown.sales', ['sales' => $datas]);
    }

    public function sales_report_api()
    {
        $sales = Sales::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = Sales::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months as $index => $month) {
            $datas[$month] = $sales[$index];
        }

        return ['sales' => $datas];
    }


    public function pdf_download(Request $request)
    {
        $from = date($request->from);
        $to = date($request->to);

        $sales = Sales::select("*")
            ->whereBetween('created_at', [$from, $to])
            ->get();

        $total = $sales
            ->sum(function ($t) {
                return $t->unit * $t->unit_price;
            });

        // share data to view
        // view()->share('sales', ['sales' => $sales, 'total' => $total]);
        $pdf = PDF::loadView('pdf.sales_repo', ['sales' => $sales, 'total' => $total]);

        // dd($pdf);
        // download PDF file with download method
        return $pdf->download(rand(0, 9999999) . "sale.pdf");
    }
}
