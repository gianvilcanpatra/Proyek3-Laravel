<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\pengguna;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Keterampilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function index()
    {

        $data = Pengguna::with('pendidikan','pekerjaan','keterampilan', 'dokumen')->get();
        

        foreach ($data as $item) {
            $item->document_url = Storage::url('public/documents/' . $item->document_path);
        }

        return view('datapengguna', compact('data'));
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
    // Validasi data input
    $validator = Validator::make($request->all(), [
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
        'pendidikanFormal' => 'nullable|string',
        'jurusan' => 'nullable|string',
        'tahunPendidikan' => 'nullable|string',
        'pekerjaan' => 'nullable|string',
        'city' => 'nullable|string',
        'employer' => 'nullable|string',
        'mulai' => 'nullable|string',
        'tahun' => 'nullable|string',
        'terakhir' => 'nullable|string',
        'tambah' => 'nullable|string',
        'deskripsis' => 'nullable|string',
        'level' => 'nullable|in:novice,intermediate',
        'skill' => 'nullable|string',
        'document' => 'nullable|file',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    // Simpan gambar jika diunggah
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('fotoprofil', 'public');
    }

    // Simpan dokumen jika diunggah
    if ($request->hasFile('document')) {
        $document = $request->file('document');
        $documentPath = $document->store('public/documents');
    } else {
        $documentPath = null;
    }

    // Buat entri pengguna
    $pengguna = Pengguna::create([
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
        'gender' => $request->input('gender'),
        'address' => $request->input('address'),
        'emailUser' => $request->input('emailUser'),
        'nomorTelepon' => $request->input('nomorTelepon'),
        'tanggalLahir' => $request->input('tanggalLahir'),
        'deskripsi' => $request->input('deskripsi'),
        'country' => $request->input('country'),
    ]);

    // Buat entri pendidikan terkait
    $pendidikanData = [
        'pengguna_id' => $pengguna->id,
        'pendidikanFormal' => $request->input('pendidikanFormal'),
        'jurusan' => $request->input('jurusan'),
        'tahunPendidikan' => $request->input('tahunPendidikan'),
    ];

    $pekerjaanData = [
        'pengguna_id' => $pengguna->id,
        'pekerjaan' => $request->input('pekerjaan'),
        'city' => $request->input('city'),
        'employer' => $request->input('employer'),
        'mulai' => $request->input('mulai'),
        'tahun' => $request->input('tahun'),
        'terakhir' => $request->input('terakhir'),
        'tambah' => $request->input('tambah'),
        'deskripsis' => $request->input('deskripsis'),

    ];

    $keterampilanData = [
        'pengguna_id' => $pengguna->id,
        'level' => $request->input('level'),
        'skill' => $request->input('skill'),
    ];

    $dokumenData = [
        'pengguna_id' => $pengguna->id,
        'document_name' => $documentPath,
    ];

    Pendidikan::create($pendidikanData);
    Pekerjaan::create($pekerjaanData);
    Keterampilan::create($keterampilanData);
    Dokumen::create($dokumenData);

    return redirect()->route('pengguna');
    }

    public function tampilkandata($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        

        return view('tampildata', compact('data', 'pendidikan'));
    }

    public function tampil($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        $pendidikan = Pendidikan::find($id);
        $pekerjaan = Pekerjaan::find($id);
        $keterampilan = Keterampilan::find($id);
        $dokumen = Dokumen::find($id);
        // dd($pendidikan);
        

        return view('tampil', compact('data', 'pendidikan', 'pekerjaan', 'keterampilan', 'dokumen'));
    }

    public function tampilketerampilan($id)
    {
        // dd($id);
        $keterampilan = Keterampilan::find($id);
        // dd($data);

        return view('tampilketerampilan', compact('keterampilan'));
    }

    public function tampilriwayatpendidikan($id)
    {
        // dd($id);
        $pendidikan = Pendidikan::find($id);

        return view('tampilriwayatpendidikan', compact('pendidikan'));
    }

    public function tampilriwayatpekerjaan($id)
    {
        // dd($id);
        $pekerjaan = Pekerjaan::find($id);
        // dd($data);

        return view('tampilriwayatpekerjaan', compact('pekerjaan'));
    }

    public function tampilprofil($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampilprofil', compact('data'));
    }

    public function tampildokumenpendukung($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampildokumenpendukung', compact('data'));
    }
    
    public function updatedata(Request $request, $id)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
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
            'pendidikanFormal' => 'nullable|string',
            'jurusan' => 'nullable|string',
            'tahunPendidikan' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
            'city' => 'nullable|string',
            'employer' => 'nullable|string',
            'mulai' => 'nullable|string',
            'tahun' => 'nullable|string',
            'terakhir' => 'nullable|string',
            'tambah' => 'nullable|string',
            'deskripsis' => 'nullable|string',
            'level' => 'nullable|in:novice,intermediate',
            'skill' => 'nullable|string',
            'document' => 'nullable|file',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Simpan gambar jika diunggah
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('fotoprofil', 'public');
        }
    
        // Simpan dokumen jika diunggah
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentPath = $document->store('public/documents');
        } else {
            $documentPath = null;
        }
    
        $pengguna = Pengguna::find($id);
        $pengguna->update([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'emailUser' => $request->input('emailUser'),
            'nomorTelepon' => $request->input('nomorTelepon'),
            'tanggalLahir' => $request->input('tanggalLahir'),
            'deskripsi' => $request->input('deskripsi'),
            'country' => $request->input('country'),
        ]);

        $pendidikanData = Pendidikan::find($id);
        $pendidikanData->update([
            'pengguna_id' => $id,
            'pendidikanFormal' => $request->input('pendidikanFormal'),
            'jurusan' => $request->input('jurusan'),
            'tahunPendidikan' => $request->input('tahunPendidikan'),
        ]);

        $pekerjaanData = Pekerjaan::find($id);
        $pekerjaanData->update([
            'pengguna_id' => $id,
            'pekerjaan' => $request->input('pekerjaan'),
            'city' => $request->input('city'),
            'employer' => $request->input('employer'),
            'mulai' => $request->input('mulai'),
            'tahun' => $request->input('tahun'),
            'terakhir' => $request->input('terakhir'),
            'tambah' => $request->input('tambah'),
            'deskripsis' => $request->input('deskripsis'),
        ]);
        // dd($pekerjaanData);
        
        // Buat entri keterampilan terkait
        $keterampilanData = Keterampilan::find($id);
        $keterampilanData->update([
            'pengguna_id' => $pengguna->id,
            'level' => $request->input('level'),
            'skill' => $request->input('level'),
        ]);
    
        // Simpan informasi dokumen
        $dokumenData = Dokumen::find($id);
        $dokumenData->update([
            'pengguna_id' => $pengguna->id,
            'document_name' => $documentPath,
        ]);
    
        return redirect()->route('pengguna');
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
}