<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;


class riwayatController extends Controller
{
    public function index(){
        $riwayat = riwayat::all();

        return response()->json([
            "message"=> "berhasil",
            "status" => 200,
            "display" => $riwayat
        ]);
    }

    //top up pulsa
    public function add(Request $request){
        $cek = $request->validate([
            'provider' => "required",
            'tanggal' => "required",
            'nominal' => "required|numeric",
        ]);

        $penggunas = riwayat::create($cek);

        return response()->json([
            "message"=> "berhasil menambah",
            "status" => 200,
            "display" => $penggunas
        ]);
    }

}