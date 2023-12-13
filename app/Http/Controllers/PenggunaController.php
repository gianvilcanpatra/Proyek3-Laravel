<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\pengguna;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Keterampilan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;
use PDF;

class PenggunaController extends Controller
{
    public function index()
    {

    $data = Pengguna::all();
    $dataPendidikan = Pendidikan::all();
    $dataPekerjaan = Pekerjaan::all();
    $dataKeterampilan = Keterampilan::all();
    
    return view('datapengguna', compact('data', 'dataPendidikan', 'dataPekerjaan', 'dataKeterampilan'));
    }

    public function profil()
    {
    $userId = Auth::id();
    $userData = Pengguna::where('user_id', $userId)->first();
    $data = $userData;

    if ($data) {
        // If user data is available, redirect to tampildata.blade.php
        return view('tampildata', compact('data'));
    } else {
        // If user data is not available, continue with the 'profil' view
        $data = $userData;
        return view('profil', compact('data'));
    }
    }  


    public function insertdata(Request $request)
    {
        
        // $data->save();


    // Validasi data input
    $validator = Validator::make($request->all(), [
        'user_id',
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'gender' => 'required|in:Male,Female',
        'address' => 'required|string',
        'emailUser' => 'required|email',
        'nomorTelepon' => 'required|numeric',
        'tanggalLahir' => 'required|date',
        'deskripsi' => 'required|string',
        'country' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
    $userId = Auth::id();
    $data = Pengguna::where('id', $userId)->first();

    // Simpan gambar jika diunggah
    $fileName = $request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('fotoprofil'), $fileName);


        // If the user with ID 1 does not exist, create a new user
        $data = Pengguna::create([
            'user_id' => Auth::id(),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'emailUser' => $request->input('emailUser'),
            'nomorTelepon' => $request->input('nomorTelepon'),
            'tanggalLahir' => $request->input('tanggalLahir'),
            'deskripsi' => $request->input('deskripsi'),
            'country' => $request->input('country'),
            'image' => $fileName,
        ]);

        $userId = $data->id;
        return redirect()->route('profil', ['id' => $userId])->with('success', 'Data berhasil disimpan');
    }


    public function tampildata($id)
    {
        // dd($id);
    $userId = Auth::id();
    $userData = Pengguna::where('user_id', $userId)->first();
    $data = $userData;

    if ($data) {
        // If user data is available, redirect to tampildata.blade.php
        return view('tampildata', compact('data'));
    } else {
        // If user data is not available, continue with the 'profil' view
        $data = $userData;
        return view('profil', compact('data'));   
    }
        return view('tampildata', compact('data', 'pendidikan'));
    }



    public function updatedata(Request $request, $id)
{
    $userData = Pengguna::find($id);

    if ($request->hasFile('image')) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        
        if (file_exists(public_path('fotoprofil/' . $userData->image))) {
            unlink(public_path('fotoprofil/' . $userData->image));
        }

        $fileName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('fotoprofil'), $fileName);
        $userData->update(['image' => $fileName]);
    }

    $userData->update($request->except('image'));

    return redirect()->route('tampildata', ['id' => $id])->with('success', 'Data berhasil diperbarui');
}


    
    
    public function tampilcv()
    {
        $user = Auth::id();

        $pengguna = Pengguna::where('user_id' ,$user)->get();
        $pendidikan = Pendidikan::where('user_id' ,$user)->get();
        $pekerjaan = Pekerjaan::where('user_id' ,$user)->get();
        $keterampilan = Keterampilan::where('user_id' ,$user)->get();

        return view('preview', compact('pengguna', 'pendidikan', 'pekerjaan', 'keterampilan'));
    }


    public function delete($id)
    {
        $data = pengguna::find($id);
        $data->delete();
        return redirect()->route('pengguna');
    }

    public function simpanData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tahunPendidikan' => ['required', 'regex:/^\d{4}-\d{4}$/'],
            // ... tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Lanjutkan dengan penyimpanan data jika validasi berhasil
    }
    public function cetak() {
        $data = Pengguna::all();
    
        \Log::info('Retrieved Data:', $data->toArray());
    
        view()->share('data', $data);
    
        $pdf = PDF::loadview('cetak');
        return $pdf->download('CV.pdf');
    }
}