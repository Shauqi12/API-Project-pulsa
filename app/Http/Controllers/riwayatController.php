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

    public function add(Request $request){
        $cek = $request->validate([
            'nama' => "required",
            'desc' => "required",
            'harga' => "required|numeric",
        ]);

        $products = riwayat::create($cek);

        return response()->json([
            "message"=> "berhasil menambah Product",
            "status" => 200,
            "products" => $products
        ]);
    }

}