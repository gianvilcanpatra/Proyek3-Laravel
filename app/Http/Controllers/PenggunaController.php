<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\pengguna;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Keterampilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function index()
    {

    $data = Pengguna::all();
    $dataPendidikan = Pendidikan::all();
    $dataPekerjaan = Pekerjaan::all();
    $dataKeterampilan = Keterampilan::all();
    
    return view('datapengguna', compact('data', 'dataPendidikan', 'dataPekerjaan', 'dataKeterampilan'));
    }

    public function profil()
    {

        $userId = Auth::id();
        $userData = Pengguna::where('user_id', $userId)->first();
        $data = $userData;
        
            return view('profil' ,compact('data'));
        
    }

    public function insertdata(Request $request)
    {
        
        // $data->save();


    // Validasi data input
    $validator = Validator::make($request->all(), [
        'user_id',
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
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
    $userId = Auth::id();

    $existingUser = Pengguna::where('id', $userId)->first();

    // Simpan gambar jika diunggah
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('fotoprofil', 'public');
    }

    if ($existingUser) {
        // Update existing user
        $existingUser->update([
            // 'id' => $pengguna->id,
            'user_id' => Auth::id(),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'emailUser' => $request->input('emailUser'),
            'nomorTelepon' => $request->input('nomorTelepon'),
            'tanggalLahir' => $request->input('tanggalLahir'),
            'deskripsi' => $request->input('deskripsi'),
            'country' => $request->input('country'),
            'image' => $request->hasFile('image') ? $request->file('image')->hashName() : $existingUser->image,
        ]);

        return redirect()->route('profil')->with('success', 'Data berhasil diperbarui');
    } else {
        // If the user with ID 1 does not exist, create a new user
        $data = Pengguna::create([
            'user_id' => Auth::id(),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'emailUser' => $request->input('emailUser'),
            'nomorTelepon' => $request->input('nomorTelepon'),
            'tanggalLahir' => $request->input('tanggalLahir'),
            'deskripsi' => $request->input('deskripsi'),
            'country' => $request->input('country'),
            'image' => $request->hasFile('image') ? $request->file('image')->hashName() : null,
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move('fotoprofil/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        $userId = $data->id;
        return redirect()->route('profil', ['id' => $userId])->with('success', 'Data berhasil disimpan');
    }
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
        $data = pengguna::find(1);
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
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
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

        return redirect()->route('tambahdatapendidikan');
    }
    
    public function tampilcv()
    {
        $user = Auth::id();

        $pengguna = Pengguna::where('user_id' ,$user)->get();
        $pendidikan = Pendidikan::where('user_id' ,$user)->get();
        $pekerjaan = Pekerjaan::where('user_id' ,$user)->get();
        $keterampilan = Keterampilan::where('user_id' ,$user)->get();


        // $userId = Auth::id();
        // $userData = Pengguna::where('user_id', $userId)->first();
        // $pengguna = $userData;
    
        // $userData = Pendidikan::where('user_id', $userId)->first();
        // $pengguna = $userData;
    
        // $userData = Pekerjaan::where('user_id', $userId)->first();
        // $pengguna = $userData;
    
        // $userData = Keterampilan::where('user_id', $userId)->first();
        // $pengguna = $userData;

        return view('preview', compact('pengguna', 'pendidikan', 'pekerjaan', 'keterampilan'));
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