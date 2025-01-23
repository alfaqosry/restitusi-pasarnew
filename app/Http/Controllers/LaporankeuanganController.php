<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class LaporankeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function laporankeuangan()
    {


        $currentDate = Carbon::now(); 
        $month = $currentDate->month;
        $year = $currentDate->year;

        $startDate = Carbon::createFromDate($year, $month, 1);
        $endDate = $startDate->copy()->endOfMonth();

        $tuesdays = [];

      
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            if ($date->dayOfWeek == Carbon::TUESDAY) {
                $tuesdays[] = $date->toDateString();
            }
        }

        $user = User::with('pedagang')->get();
        $tagihan = Invoice::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)->where('status', 'success')
            ->get();

        return view('page.laporankeuangan.laporankeuangan', [
            'tanggal' => $tuesdays,
            'tagihan' =>  $tagihan,
            'users' => $user,
            'bulan' =>$month,
            'tahun' =>$year


        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
