<?php

namespace App\Http\Controllers;

use App\Models\Verifikasiakun;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\NotifikasiMail;
use Illuminate\Support\Facades\Mail;

class VerifikasiakunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $verifikasi = Verifikasiakun::with('user.pedagang')->where('user_id', Auth()->user()->id)->first();
        return view('page.verifikasi.ajukanverifikasi', compact('verifikasi'));
    }

    public function verifikasiall(){

        $verifikasi = Verifikasiakun::all();
        return view('page.verifikasi.daftarverifikasi', compact('verifikasi'));


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
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
           
            'nik' => 'required|string|max:20',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'jenis_dagangan' => 'required|string|max:255',
           
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::find($id);

     

      

        $user->pedagang->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jenis_dagangan' => $request->jenis_dagangan,
    
        ]);

        $user->verifikasiakun()->update([
            "status" => "Diajukan",
            "keterangan" => "Silahkan tunggu persetujuan admin"

        ]);

        return redirect()->route('verifikasi.pengajuan')->with('success', 'Pengajuan berhasil dibuat.');
    }


    public function terima($id){
        $verifikasi = Verifikasiakun::where('user_id', $id)->first();

        $verifikasi->update([
            "status" => "verified",
            "keteranga" => "Pengajuan Anda telah disetujui"
        ]);
        $verifikasi->user->update([
            "is_active" => true
        ]);

        $user = User::where('id',$id)->with('pedagang')->first();
        Mail::to($user->email)->send(new NotifikasiMail( $user));

        return redirect()->route('verifikasi.verifikasiall')->with('success', 'Pengajuan Anda telah disetujui');
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
