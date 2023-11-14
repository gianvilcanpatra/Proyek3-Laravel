<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PekerjaanController extends Controller
{

    public function tambahdatapekerjaan()
    {

        return view('riwayatpekerjaan');
    }

    public function insertdatapekerjaan(Request $request)
    {
    // Validasi data input
    $validator = Validator::make($request->all(), [
        'pekerjaan' => 'nullable|string',
        'city' => 'nullable|string',
        'employer' => 'nullable|string',
        'mulai' => 'nullable|string',
        'tahun' => 'nullable|string',
        'terakhir' => 'nullable|string',
        'tambah' => 'nullable|string',
        'deskripsis' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }


    // Buat entri pendidikan terkait
    $data = Pekerjaan::create([
        'pengguna_id' => 1,
        'pekerjaan' => $request->input('pekerjaan'),
        'city' => $request->input('city'),
        'employer' => $request->input('employer'),
        'mulai' => $request->input('mulai'),
        'tahun' => $request->input('tahun'),
        'terakhir' => $request->input('terakhir'),
        'tambah' => $request->input('tambah'),
        'deskripsis' => $request->input('deskripsis'),
    ]);;

    return redirect()->route('tambahdataketerampilan')->with('success', 'Data Berhasil di Simpan');
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
