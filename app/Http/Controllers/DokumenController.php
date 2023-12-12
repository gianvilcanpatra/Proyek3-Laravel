<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DokumenController extends Controller
{
    public function index()
    {
        $data = Dokumen::all();

        foreach ($data as $item) {
            $item->document_url = Storage::url('public/documents/' . $item->document_path);
        }

        return view('datapengguna', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function tambahdatadokumen()
    {
        $userId = Auth::id();
        $data = Dokumen::where('user_id', $userId)->get();
        return view('dokumenpendukung', compact('data'));
    }

    public function insertdatadokumen(Request $request)
    {
    // Validasi data input
    $data = Auth::id();
    $userId = Auth::id();

    $validator = Validator::make($request->all(), [
        'document' => 'nullable|file',
    ]);


    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }


    // Simpan dokumen jika diunggah
    if ($request->hasFile('document')) {
        $document = $request->file('document');
        $documentName = $document->getClientOriginalName();
        $documentPath = $document->storeAs('public/documents', $documentName);
        // dd($documentPath);
    } else {
        $documentPath = null;
    }

    $data = User::where('user_id', $userId)->first();
    // Buat entri pendidikan terkait
    $data = Dokumen::create([
        'user_id' => $userId,
        'document_name' => $documentName,
        'document_path' => $documentPath,
    ]);
    return redirect()->route('tambahdatadokumen')->with('success', 'Data Berhasil di Simpan');
    // return redirect()->route('pengguna')->with('success', 'Data Berhasil di Simpan');
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
    public function delete($id)
    {
        $data = Dokumen::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('tambahdatadokumen');
    }
}
