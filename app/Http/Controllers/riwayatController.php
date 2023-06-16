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
}
