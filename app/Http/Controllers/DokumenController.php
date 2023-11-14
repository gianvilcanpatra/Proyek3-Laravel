<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class DokumenController extends Controller
{
    public function index()
    {

        foreach ($data as $item) {
            $item->document_url = Storage::url('public/documents/' . $item->document_path);
        }

        return view('datapengguna', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function tambahdatadokumen()
    {

        return view('dokumenpendukung');
    }

    public function insertdatadokumen(Request $request)
    {
    // Validasi data input
    $validator = Validator::make($request->all(), [
        'document' => 'nullable|file',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }


    // Buat entri pendidikan terkait
    $data = Dokumen::create([
        'pengguna_id' => 1,
        'document_name' => $documentPath,
    ]);;
    return redirect()->route('pengguna')->with('success', 'Data Berhasil di Simpan');
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
