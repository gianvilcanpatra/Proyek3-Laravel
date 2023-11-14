<?php

namespace App\Http\Controllers;

use App\Models\Keterampilan;
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


    // Buat entri pendidikan terkait
    $data = Keterampilan::create([
        'pengguna_id' => 1,
        'level' => $request->input('level'),
        'skill' => $request->input('skill'),
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
