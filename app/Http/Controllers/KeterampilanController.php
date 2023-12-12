<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use App\Models\Keterampilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $userId = Auth::id();
        $data = Keterampilan::where('user_id', $userId)->get();
        return view('keterampilan', compact('data'));
    }

    public function tampilketerampilan()
    {
        $userId = Auth::id();
        $keterampilan = Keterampilan::where('user_id', $userId)->get();

        return view('tampilketerampilan', compact('keterampilan'));
    }

    public function insertdataketerampilan(Request $request)
    {

    $data = Auth::id();
    $userId = Auth::id();
    // Validasi data input
    $validator = Validator::make($request->all(), [
        'level' => 'nullable|in:Novice,Competent,Proficient,Expert,Master',
        'skill' => 'nullable|string',
        'tahunPengalaman' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $data = User::where('user_id', $userId)->first();

    // Buat entri pendidikan terkait
    foreach ($request->Keterampilan as $keterampilan) {
        Keterampilan::updateOrCreate([
        'user_id' => $userId,
        'skill' => $keterampilan['skill'],
        'tahunPengalaman' => $keterampilan['tahunPengalaman'],
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
    public function updatedataketerampilan(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'Keterampilan.*.level' => 'nullable|in:Novice,Competent,Proficient,Expert,Master',
        //     'Keterampilan.*.skill' => 'nullable|string',
        //     'Keterampilan.*.tahunPengalaman' => 'nullable|string',

        // ]);
    
        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
        
        $data = Keterampilan::find($id);
        $user = Auth::user();

        foreach ($request->Keterampilan as $keterampilanId => $keterampilanData) {
            $keterampilan = Keterampilan::find($keterampilanId);
    
            if ($keterampilan) {
                $keterampilan->update([
                    'skill' => $keterampilanData['skill'],
                    'tahunPengalaman' => $keterampilanData['tahunPengalaman'],
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
