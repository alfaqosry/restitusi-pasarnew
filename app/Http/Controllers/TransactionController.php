<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Invoice;
use App\Models\Sewatempat;
use App\Models\Toko;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $transaction = Transaction::with('invoice')->latest()->get();
        return view('page.transaction.index', compact('transaction'));
    }


    public function success(Transaction $transaction)
    {


        $transaction->metode_pembayaran = "Online Payment";
        $transaction->status = "success";
        $transaction->save();

        $transaction->with('invoice.user')->first();

        $invoice = Invoice::find($transaction->invoice_id);
        $invoice->status = "success";
        $invoice->save();

        return view('page.transaction.status', compact('transaction', 'invoice'));
    }


    public function tagihan() {}


    public function pembayaranmanual(Invoice $invoice)
    {

    

        $transaction = Transaction::create([
            'user_id' => $invoice->user_id,
            'invoice_id' => $invoice->id,
            'order_id' => rand(),
            'price' => $invoice->amount,
            'status' => 'pending',
            'snap_token' =>   rand(),
            'keterangan' =>   "Retribusi(manual)",
        ]);
      
        $invoice->status = "success";
        $invoice->save();
        return redirect()->route('dashboard.index')->with('success', 'Pembayaran Manual berhasil');
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
