<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
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


    public function laporankeuangan(Request $request)
    {


        $currentDate = Carbon::now(); 

    
        $month = $currentDate->month;
        $year = $currentDate->year;


        if ($request->has('date')) {
            $selectedDate = Carbon::parse($request->input('date'));
            $month = $selectedDate->month;
            $year = $selectedDate->year;
        }
    

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


 

public function generatePDF(Request $request)
{
    // Fetch data you need to generate the PDF
    $currentDate = Carbon::now();
    $month = $currentDate->month;
    $year = $currentDate->year;

    if ($request->has('date')) {
        $selectedDate = Carbon::parse($request->input('date'));
        $month = $selectedDate->month;
        $year = $selectedDate->year;
    }

    // Use the existing logic to get the data (the same as in your original method)
    $startDate = Carbon::createFromDate($year, $month, 1);
    $endDate = $startDate->copy()->endOfMonth();
    $tuesdays = [];

    for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
        if ($date->dayOfWeek == Carbon::TUESDAY) {
            $tuesdays[] = $date->toDateString();
        }
    }

    $users = User::with('pedagang')->get();
    $tagihan = Invoice::whereMonth('created_at', $month)
        ->whereYear('created_at', $year)
        ->where('status', 'success')
        ->get();

    // Generate PDF from the view with data
    $pdf = Pdf::loadView('page.laporankeuangan.laporanpdf', [
        'tanggal' => $tuesdays,
        'tagihan' => $tagihan,
        'users' => $users,
        'bulan' => $month,
        'tahun' => $year,
    ]);

    // Return the generated PDF for download
    return $pdf->download('laporanrestitusi' . $month . '-' . $year . '.pdf');
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
