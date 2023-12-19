<?php

namespace App\Http\Controllers;

use App\Models\reguler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reguler = reguler::all();
        return view('reguler.index', ['reguler' => $reguler]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reguler = reguler::all();
        return view('reguler.create', ['reguler' => $reguler]);
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

        $reguler = new reguler();

        $reguler->nama      = $request->nama;
        $reguler->ttl       = $request->ttl;
        $reguler->gender    = $request->gender;
        $reguler->jenjang   = $request->jenjang;
        $reguler->kelas     = $request->kelas;
        $reguler->jenis_program = $request->jenis_program;
        $reguler->alamat      = $request->alamat;
        $reguler->nama_wali   = $request->nama_wali;
        $reguler->no_hp       = $request->no_hp;

        $reguler->save();

        return redirect('regulers')->with('status', 'Pengajar berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(reguler $reguler)
    {
        return view('reguler.show', ['reguler' => $reguler]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reguler = DB::table('regulers')->where('id', $id)->first();
        return view('reguler.edit', ['reguler' => $reguler]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reguler $reguler)
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

        reguler::where('id', $reguler->id)->update([
            'nama'     => $request->nama,
            'ttl'       => $request->ttl,
            'gender'    => $request->gender,
            'jenjang'   => $request->jenjang,
            'kelas'     => $request->kelas,
            'jenis_program' =>  $request->jenis_program,
            'nama_wali'   => $request->nama_wali,
            'no_hp'       => $request->no_hp,

        ]);


        return redirect('regulers')->with('status', 'Data berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reguler $reguler)
    {
        $reguler->delete(); //deplete biasa 

        return redirect('regulers')->with('Data', 'Data berhasil di Hapus!');
    }
}
