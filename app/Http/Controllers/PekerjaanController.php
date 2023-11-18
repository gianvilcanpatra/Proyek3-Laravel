<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PekerjaanController extends Controller
{
    public function index()
    {

        $data = Pekerjaan::all();

        return view('datapengguna', compact('data'));
    }

    public function tambahdatapekerjaan()
    {

        $data = Pekerjaan::all();
        return view('riwayatpekerjaan', compact('data'));
    }

    public function tampilriwayatpekerjaan($id)
    {
        // dd($id);
        $data = Pekerjaan::find($id);

        return view('tampilriwayatpekerjaan', compact('data'));
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

    $pengguna = Pengguna::first();
    $id = $pengguna->id;


    // Buat entri pendidikan terkait
    foreach ($request->riwayatPekerjaan as $pekerjaan) {
        Pekerjaan::updateOrCreate([
        'pengguna_id' => 1,
        'pekerjaan' => $pekerjaan['pekerjaan'],
        'city' => $pekerjaan['city'],
        'employer' => $pekerjaan['employer'],
        'mulai' => $pekerjaan['mulai'],
        'tahun' => $pekerjaan['tahun'],
        'terakhir' => $pekerjaan['terakhir'],
        'tambah' => $pekerjaan['tambah'],
        'deskripsis' => $pekerjaan['deskripsis'],
    ]);;
    }

    return redirect()->route('tambahdatapekerjaan')->with('success', 'Data Berhasil di Simpan');
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
    public function updatedata(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pekerjaan' => 'nullable|string',
            'city' => 'nullable|string',
            'employer' => 'nullable|string',
            'mulai' => 'nullable|string',
            'tahun' => 'nullable|string',
            'terakhir' => 'nullable|string',
            'tambah' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $data = Pekerjaan::find($id);
        $data->update([
            'pekerjaan' => $request->input('pekerjaan'),
            'city' => $request->input('city'),
            'employer' => $request->input('employer'),
            'mulai' => $request->input('mulai'),
            'tahun' => $request->input('tahun'),
            'terakhir' => $request->input('terakhir'),
            'tambah' => $request->input('tambah'),
            'deskripsis' => $request->input('deskripsis'),
        ]);

        return redirect()->route('tambahdatapekerjaan')->with('success', 'Data Berhasil di Simpan');
    }

    public function delete($id)
    {
        $data = Pekerjaan::find($id);
        $data->delete();
        return redirect()->route('tambahdatapekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
