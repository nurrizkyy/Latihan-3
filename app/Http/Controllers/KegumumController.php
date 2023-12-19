<?php

namespace App\Http\Controllers;

use App\Models\kegumum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegumumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegumums = kegumum::all();
        return view('kegumum.index', ['kegumums' => $kegumums]);
        // return view('kegumum.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('kegumum.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'nama'  => 'required|min:3',
            'ket'   => 'required',
            'hari'  => 'required',
        ], [
            'nama.required' => 'Status jenjang tidak boleh kosong'  //custom tulisan peringantan
        ]);

        DB::table('kegumums')->insert([
            'nama'  => $request->nama,
            'ket'   => $request->ket,
            'hari'   => $request->hari
        ]);
        return redirect('kegumums')->with('status', 'Jenjang berhasil di Tambah!');
    }


    public function edit($id)
    {
        $kegumums = DB::table('kegumums')->where('id', $id)->first();
        return view('kegumum.edit', ['kegumums' => $kegumums]);
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|min:3',
            'ket'   => 'required',
            'hari'  => 'required',

        ]);

        DB::table('kegumums')->where('id', $id)
            ->update([
                'nama'  => $request->nama,
                'ket'   => $request->ket,
                'hari'  => $request->hari
            ]);
        return redirect('kegumums')->with('status', 'Jenjang berhasil di Update!');
    }

    public function delete($id)
    {
        DB::table('kegumums')->where('id', $id)->delete();
        return redirect('kegumums')->with('status', 'Jenjang berhasil di Hapus!');
    }
}
