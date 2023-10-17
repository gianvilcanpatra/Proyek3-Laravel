<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = pengguna::all();

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
        //dd($request->all());
        // pengguna::create($request->all());

        $data = $request->validate([
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
            'skill' => 'required|string',
            'level' => 'required|in:novice,intermediate',
        ]);

        if ($request->hasFile('image')) {
            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }

        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentName = $document->getClientOriginalName();
            $documentPath = $document->store('public/documents');

            $data['document_name'] = $documentName;
            $data['document_path'] = $documentPath;
        } else {
            $data['document_name'] = null;
            $data['document_path'] = null;
        }

        unset($data['document']);

        pengguna::create($data);

        return redirect()->route('pengguna');
    }

    public function tampilkandata($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampildata', compact('data'));
    }

    public function tampil($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampil', compact('data'));
    }

    public function tampilketerampilan($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampilketerampilan', compact('data'));
    }

    public function tampilriwayatpendidikan($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampilriwayatpendidikan', compact('data'));
    }

    public function tampilriwayatpekerjaan($id)
    {
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampilriwayatpekerjaan', compact('data'));
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
        $data = pengguna::find($id);

        $data->update($request->only([
            'firstName',
            'lastName',
            'gender',
            'address',
            'emailUser',
            'nomorTelepon',
            'tanggalLahir',
            'deskripsi',
            'country',
            'image',
            // Jika Anda ingin memperbarui gambar juga
            'pendidikanFormal',
            'jurusan',
            'tahunPendidikan',
            'pekerjaan',
            'skill',
            'level',
        ]));

        $data->save(); // Simpan perubahan ke database

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