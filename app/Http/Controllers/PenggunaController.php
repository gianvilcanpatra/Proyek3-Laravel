<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        $data = pengguna::all();
        return view('datapengguna', compact('data'));   
    }

    public function tambahdata(){
        return view('tambahdata'); 
    }

    public function insertdata(Request $request){
        //dd($request->all());
        pengguna::create($request->all());
        
        if($request->hasFile('image')) {
            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        return redirect()->route('pengguna');
    }    

    public function tampilkandata($id){
        // dd($id);
        $data = pengguna::find($id);
        // dd($data);

        return view('tampildata', compact('data'));   
    }

    public function updatedata(Request $request, $id){
        $data = pengguna::find($id);
        $data->update($request->all());

        return redirect()->route('pengguna')->with('success','Data Berhasil di Update');   
    }

    public function delete($id){
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
