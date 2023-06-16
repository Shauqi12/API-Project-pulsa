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
            "message"=> "berhasil menambah ",
            "status" => 200,
            "display" => $penggunas
        ]);
    }

    //edit data
    public function update(Request $request, $id){
        $cek = $request->validate([
            'nama' => "required",
            'saldo' => "required|numeric",
        ]);

        $user = pengguna::find($id);
        $user->nama = $cek['nama'];
        $user->saldo = $cek['saldo'];

        return response()->json([
            "message"=> "berhasil mengupdate",
            "status" => 200,
            "display" => $user
        ]);
    }

    public function delete($id){
        $user = pengguna::find($id);
        $user->delete();

        return response()->json([
            "message"=> "berhasil dihapus",
            "status" => 200,
        ]);
    }

}