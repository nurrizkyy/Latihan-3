<?php

namespace App\Http\Controllers;

use App\Models\pengasuh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengasuh = pengasuh::all();
        return view('pengasuh.index', ['pengasuh' => $pengasuh]);
        // return view('pengasuh.index');
    }

    // public function create()
    // {
    //     return view('pengasuh.create');
    // }

    // public function createProcess(Request $request)
    // {
    //     $request->validate([
    //         'nama'     => 'required|min:3',
    //         'ttl'      => 'required',
    //         'alamat'   => 'required',
    //         'gender'   => 'required',
    //         'status'   => 'required',
    //         'pengajar' => 'required',
    //     ], [
    //         'nama.required' => 'Status jenjang tidak boleh kosong'  //custom tulisan peringantan
    //     ]);

    //     DB::table('pengasuhs')->insert([
    //         'nama'      => $request->nama,
    //         'ttl'       => $request->ttl,
    //         'alamat'   => $request->alamat,
    //         'gender'    => $request->gender,
    //         'status'    => $request->status,
    //         'pengajar'  => $request->pengajar,
    //     ]);



    //     return redirect('pengasuhs')->with('status', 'Jenjang berhasil di Tambah!');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengasuh = pengasuh::all();
        return view('pengasuh.create', ['pengasuhs' => $pengasuh]);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|min:3',
            'ttl'      => 'required',
            'alamat'   => 'required',
            'gender'   => 'required',
            'status'   => 'required',
            'pengajar' => 'required',

        ]);

        $pengasuh = new pengasuh();

        $pengasuh->nama     = $request->nama;
        $pengasuh->ttl      = $request->ttl;
        $pengasuh->alamat   = $request->alamat;
        $pengasuh->gender   = $request->gender;
        $pengasuh->status   = $request->status;
        $pengasuh->pengajar = $request->pengajar;

        $pengasuh->save();

        return redirect('pengasuhs')->with('status', 'Pengajar berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengasuh $pengasuh)
    {
        return view('pengasuh.show', ['pengasuh' => $pengasuh]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengasuh = DB::table('pengasuhs')->where('id', $id)->first();
        return view('pengasuh.edit', ['pengasuhs' => $pengasuh]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengasuh $pengasuh)
    {
        $request->validate([
            'nama'     => 'required|min:3',
            'ttl'      => 'required',
            'alamat'   => 'required',
            'gender'   => 'required',
            'status'   => 'required',
            'pengajar' => 'required',

        ]);

        pengasuh::where('id', $pengasuh->id)->update([
            'nama'   => $request->nama,
            'ttl'    => $request->ttl,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'status' => $request->status,
            'status' => $request->status,

        ]);


        return redirect('pengasuhs')->with('status', 'program berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengasuh $pengasuh)
    {
        $pengasuh->delete(); //deplete biasa 

        return redirect('pengasuhs')->with('status', 'program berhasil di Hapus!');
    }
}
