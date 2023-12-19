<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Edulevel;
use Illuminate\Support\Facades\DB;


class EdulevelController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('edulevels')->get();
        // return $edulevels;
        return view('edulevel.data', ['edulevels' => $edulevels]); //cara pertama mengekspor data
        // return view('edulevel.data', compact('edulevels'));
        // dd($edulevels);  //untuk mengecek data
    }

    public function add()
    {
        return view('edulevel.add');
    }


    public function addProcess(Request $request)
    {
        $request->validate([
            'nama'  => 'required|min:3',
            'ket'   => 'required',
        ], [
            'nama.required' => 'Status jenjang tidak boleh kosong'  //custom tulisan peringantan
        ]);

        DB::table('edulevels')->insert([
            'nama'  => $request->nama,
            'ket'   => $request->ket
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil di Tambah!');
    }

    public function edit($id)
    {
        $edulevel = DB::table('edulevels')->where('id', $id)->first();
        return view('edulevel.edit', ['edulevel' => $edulevel]);
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|min:3',
            'ket'   => 'required',
        ]);

        DB::table('edulevels')->where('id', $id)
            ->update([
                'nama'  => $request->nama,
                'ket'   => $request->ket
            ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil di Update!');
    }

    public function delete($id)
    {
        DB::table('edulevels')->where('id', $id)->delete();
        return redirect('edulevels')->with('status', 'Jenjang berhasil di Hapus!');
    }
}
