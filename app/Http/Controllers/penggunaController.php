<?php

namespace App\Http\Controllers;

use App\Models\pengguna ;
use App\Models\User ;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function pengguna(){
        $user = pengguna::all();

        return response()->json([
            "message"=> "berhasil",
            "status" => 200,
            "display" => $user
        ]);
    }

    public function add(Request $request){
        $cek = $request->validate([
            'nama' => "required",
            'saldo' => "required|numeric",
        ]);

        $penggunas = pengguna::create($cek);

        return response()->json([
            "message"=> "berhasil menambah Product",
            "status" => 200,
            "products" => $penggunas
        ]);
    }

}