<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $userId = Auth::id();
        $data = Pekerjaan::where('user_id', $userId)->get();

        return view('riwayatpekerjaan', compact('data'));
    }

    public function tampilriwayatpekerjaan($id)
    {
        // dd($id);
        $userId = Auth::id();
        $riwayatPekerjaan = Pekerjaan::where('user_id', $userId)->get();

        return view('tampilriwayatpekerjaan', compact('riwayatPekerjaan'));
    }

    public function insertdatapekerjaan(Request $request)
    {

    $data = Auth::id();
    $userId = Auth::id();
    // Validasi data input
    $validator = Validator::make($request->all(), [
        'pekerjaan' => 'nullable|string',
        'city' => 'nullable|string',
        'employer' => 'nullable|string',
        'mulaikerja' => 'nullable|string',
        'akhirkerja' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $data = User::where('user_id', $userId)->first();

    // Buat entri pendidikan terkait
    foreach ($request->riwayatPekerjaan as $pekerjaan) {
        $data = Pekerjaan::updateOrCreate([
        'user_id' => $userId,
        'pekerjaan' => $pekerjaan['pekerjaan'],
        'city' => $pekerjaan['city'],
        'employer' => $pekerjaan['employer'],
        'mulaikerja' => $pekerjaan['mulaikerja'],
        'akhirkerja' => $pekerjaan['akhirkerja'],
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
    public function updatedatapekerjaan(Request $request, $id)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'Pekerjaan.*.pekerjaan' => 'nullable|string',
            'Pekerjaan.*.city' => 'nullable|string',
            'Pekerjaan.*.employer' => 'nullable|string',
            'Pekerjaan.*.mulaikerja' => 'nullable|string',
            'Pekerjaan.*.akhirkerja' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Loop melalui data pekerjaan yang dikirimkan melalui formulir
            // Jika pekerjaan tidak ditemukan, buat pekerjaan baru
    
            $data = Pekerjaan::find($id);
            $user = Auth::user();
    
            // if ($request->has('pekerjaan')) {
               foreach ($request->riwayatPekerjaan as $pekerjaanId => $pekerjaanData) {
                   Pekerjaan::updateOrCreate(
                       ['id' => $pekerjaanId],
                [
                // 'pengguna_id' => $pengguna->id,
                'pekerjaan' => $pekerjaanData['pekerjaan'],
                'city' => $pekerjaanData['city'],
                'employer' => $pekerjaanData['employer'],
                'mulaikerja' => $pekerjaanData['mulaikerja'],
                'akhirkerja' => $pekerjaanData['akhirkerja'],
            ]);
        // }
    }
    
    
        // Redirect atau kembalikan respons sesuai kebutuhan Anda
        return redirect()->route('tambahdatapekerjaan')->with('success', 'Data Pekerjaan Berhasil di Update');
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
