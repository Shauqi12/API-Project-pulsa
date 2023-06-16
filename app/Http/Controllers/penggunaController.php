<?php

namespace App\Http\Controllers;

use App\Models\pengguna ;
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
}
