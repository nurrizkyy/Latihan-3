<?php

namespace App\Http\Controllers;

use App\Models\privat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privat = privat::all();
        return view('privat.index', ['privat' => $privat]);
        // return view('kegprivat.index');
    }

    public function add()
    {
        return view('privat.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'nama'  => 'required|min:3',
            'ket'   => 'required',
            'waktu' => 'required',
            'hari' => 'required',

        ], [
            'nama.required' => 'Nama Program tidak boleh kosong'  //custom tulisan peringantan
        ]);

        DB::table('privats')->insert([
            'nama'  => $request->nama,
            'ket'   => $request->ket,
            'waktu' => $request->waktu,
            'hari' => $request->hari
        ]);
        return redirect('privats')->with('status', 'Jenjang berhasil di Tambah!');
    }


    public function edit($id)
    {
        $privat = DB::table('privats')->where('id', $id)->first();
        return view('privat.edit', ['privats' => $privat]);
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|min:3',
            'ket'   => 'required',
            'waktu' => 'required',
            'hari'  => 'required',

        ]);

        DB::table('privats')->where('id', $id)
            ->update([
                'nama'  => $request->nama,
                'ket'   => $request->ket,
                'waktu' => $request->waktu,
                'hari'  => $request->hari
            ]);
        return redirect('privats')->with('status', 'Jenjang berhasil di Update!');
    }

    public function delete($id)
    {
        DB::table('privats')->where('id', $id)->delete();
        return redirect('privats')->with('status', 'Jenjang berhasil di Hapus!');
    }
}
