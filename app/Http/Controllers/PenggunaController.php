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
        Pengguna::create($request->all());
        return redirect()->route('pengguna');
    }    
}
