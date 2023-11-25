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
        $riwayatPendidikan = Pendidikan::find($id)->get();
        return view('tampilriwayatpendidikan', compact('riwayatPendidikan'));
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
    foreach ($request->riwayatPendidikan as $pendidikan) {
        Pendidikan::updateOrCreate([
        'pengguna_id' => 1,
        'pendidikanFormal' => $pendidikan['pendidikanFormal'],
        'jurusan' => $pendidikan['jurusan'],
        'tahunPendidikan' => $pendidikan['tahunPendidikan'],
    ]);;
    }
    
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
    public function updatedatapendidikan(Request $request, $id)
    {
        // dd($request->all());
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'pendidikan.*.pendidikanFormal' => 'nullable|string',
            'pendidikan.*.jurusan' => 'nullable|string',
            'pendidikan.*.tahunPendidikan' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Ambil pengguna_id dari pengguna yang sedang login atau sesuaikan dengan logika aplikasi Anda
        $pengguna = pengguna::first();
    
         if ($request->has('pendidikan')) {
            foreach ($request->pendidikan as $pendidikanId => $pendidikan) {
                Pendidikan::updateOrCreate(
                    ['id' => $pendidikanId],
                    [
                        'pengguna_id' => $pengguna->id,
                        'pendidikanFormal' => $pendidikan['pendidikanFormal'],
                        'jurusan' => $pendidikan['jurusan'],
                        'tahunPendidikan' => $pendidikan['tahunPendidikan'],
                    ]
                );
            }
         }
    
        return redirect()->route('tambahdatapendidikan')->with('success', 'Data Berhasil di Update');
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
