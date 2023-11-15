<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Pendidikan::all();

        return view('datapengguna', compact('data'));
    }

    public function tambahdatapendidikan()
    {
        $data = Pendidikan::all();
        return view('riwayatpendidikan', compact('data'));
    }

    public function tampilriwayatpendidikan($id)
    {
        // dd($id);
        $data = Pendidikan::find($id);

        return view('tampilriwayatpendidikan', compact('data'));
    }

    public function insertdatapendidikan(Request $request)
    {
    // Validasi data input
    $validator = Validator::make($request->all(), [
        'pendidikanFormal' => 'nullable|string',
        'jurusan' => 'nullable|string',
        'tahunPendidikan' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $pengguna = Pengguna::first();
    $id = $pengguna->id;
    

    // Buat entri pendidikan terkait
    $dataPendidikan = Pendidikan::create([
        'pengguna_id' => $id,
        'pendidikanFormal' => $request->input('pendidikanFormal'),
        'jurusan' => $request->input('jurusan'),
        'tahunPendidikan' => $request->input('tahunPendidikan'),
    ]);;
    
    return redirect()->route('tambahdatapendidikan')->with('success', 'Data Berhasil di Simpan');
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
            'pendidikanFormal' => 'nullable|string',
            'jurusan' => 'nullable|string',
            'tahunPendidikan' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = Pendidikan::find($id);
        $data->update([
            'pendidikanFormal' => $request->input('pendidikanFormal'),
            'jurusan' => $request->input('jurusan'),
            'tahunPendidikan' => $request->input('tahunPendidikan'),
        ]);

        return redirect()->route('tambahdatapendidikan')->with('success', 'Data Berhasil di Simpan');
    }

    public function delete($id)
    {
        $data = Pendidikan::find($id);
        $data->delete();
        return redirect()->route('tambahdatapendidikan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
