<?php

namespace App\Http\Controllers;

use App\Models\full;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FullController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $full = full::all();
        return view('full.index', ['full' => $full]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $full = full::all();
        return view('full.index', ['full' => $full]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|min:3',
            'ttl'           => 'required',
            'gender'        => 'required',
            'jenjang'       => 'required',
            'kelas'         => 'required',
            'jenis_program' => 'required',
            'alamat'        => 'required',
            'nama_wali'     => 'required',
            'no_hp'         => 'required',
            'kelas'         => 'required',


        ]);

        $full = new full();

        $full->nama      = $request->nama;
        $full->ttl       = $request->ttl;
        $full->gender    = $request->gender;
        $full->jenjang   = $request->jenjang;
        $full->kelas     = $request->kelas;
        $full->jenis_program = $request->jenis_program;
        $full->alamat      = $request->alamat;
        $full->nama_wali   = $request->nama_wali;
        $full->no_hp       = $request->no_hp;

        $full->save();

        return redirect('fulls')->with('status', 'Pengajar berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(full $full)
    {
        return view('full.show', ['full' => $full]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $full = DB::table('fulls')->where('id', $id)->first();
        return view('full.edit', ['full' => $full]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, full $full)
    {
        $request->validate([
            'nama'          => 'required|min:3',
            'ttl'           => 'required',
            'gender'        => 'required',
            'jenjang'       => 'required',
            'kelas'         => 'required',
            'jenis_program' => 'required',
            'alamat'        => 'required',
            'nama_wali'     => 'required',
            'no_hp'         => 'required',
            'kelas'         => 'required',

        ]);

        full::where('id', $full->id)->update([
            'nama'     => $request->nama,
            'ttl'       => $request->ttl,
            'gender'    => $request->gender,
            'jenjang'   => $request->jenjang,
            'kelas'     => $request->kelas,
            'jenis_program' =>  $request->jenis_program,
            'nama_wali'   => $request->nama_wali,
            'no_hp'       => $request->no_hp,

        ]);


        return redirect('fulls')->with('status', 'Data berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(full $full)
    {
        $full->delete(); //deplete biasa 

        return redirect('fulls')->with('Data', 'Data berhasil di Hapus!');
    }
}
