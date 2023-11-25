<?php

namespace App\Http\Controllers;

use App\Models\Keterampilan;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class KeterampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Keterampilan::all();

        return view('datapengguna', compact('data'));
    }

    public function tambahdataketerampilan()
    {
        $data = Keterampilan::all();
        return view('keterampilan', compact('data'));
    }

    public function tampilketerampilan($id)
    {
        // dd($id);
        $data = Keterampilan::find($id);

        return view('tampilketerampilan', compact('data'));
    }

    public function insertdataketerampilan(Request $request)
    {
    // Validasi data input
    $validator = Validator::make($request->all(), [
        'level' => 'nullable|in:novice,intermediate',
        'skill' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $pengguna = Pengguna::first();
    $id = $pengguna->id;

    // Buat entri pendidikan terkait
    foreach ($request->Keterampilan as $keterampilan) {
        Keterampilan::updateOrCreate([
        'pengguna_id' => 1,
        'skill' => $keterampilan['skill'],
        'level' => $keterampilan['level'],
    ]);
}

    return redirect()->route('tambahdataketerampilan');
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
    public function updatedataketerampilan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Keterampilan.*.level' => 'nullable|in:Novice,Intermediate',
            'Keterampilan.*.skill' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->Keterampilan as $keterampilanId => $keterampilanData) {
            $keterampilan = Keterampilan::find($keterampilanId);
    
            if ($keterampilan) {
                $keterampilan->update([
                    'skill' => $keterampilanData['skill'],
                    'level' => $keterampilanData['level'],
                ]);
            }
        }
    
        return redirect()->route('tambahdataketerampilan')->with('success', 'Data Keterampilan Berhasil di Update');
    }

    public function delete($id)
    {
        $data = Keterampilan::find($id);
        $data->delete();
        return redirect()->route('tambahdataketerampilan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
