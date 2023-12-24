<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Edulevel;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $program = Program::withTrashed()->get();   // menampilkan data yang sudah di hapus permanen
        // $program = Program::onlyTrashed()->get();   // di hapus sementara

        $program = Program::all();
        // return $program;
        return view('program.index', ['program' => $program]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edulevel = Edulevel::all();
        return view('program.create', ['edulevel' => $edulevel]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|min:3',
            'edulevel_id'   => 'required',
        ], [
            'edulevel_id.required' => 'Status jenjang tidak boleh kosong'  //custom tulisan peringantan
        ]);

        // return $request;


        // cara pertama
        $program = new Program();

        $program->nama = $request->nama;
        $program->edulevel_id = $request->edulevel_id;
        $program->student_price = $request->student_price;
        $program->student_max = $request->student_max;
        $program->info = $request->info;

        $program->save();



        //cara  yang ke dua
        // Program::created([
        //     'nama' => $request->nama,
        //     'edulevel_id' => $request->edulevel_id,
        //     'student_price' => $request->student_price,
        //     'student_max' => $request->student_max,
        //     'info' => $request->info,

        // ]);
        return redirect('programs')->with('status', 'program berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        // 

        $program->makeHidden(['edulevel_id']);

        return view('program.show', ['program' => $program]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        $edulevel = Edulevel::all();
        return view('program.edit', [
            'program' =>  $program,
            'edulevel' => $edulevel

        ]);


        // return view('program.edit', ['program' => $program]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'nama'          => 'required|min:3',
            'edulevel_id'   => 'required',
        ], [
            'edulevel_id.required' => 'Status jenjang tidak boleh kosong'  //custom tulisan peringantan
        ]);

        //cara yang 1

        // $program->nama = $request->nama;
        // $program->edulevel_id = $request->edulevel_id;
        // $program->student_price = $request->student_price;
        // $program->student_max = $request->student_max;
        // $program->info = $request->info;
        // $program->save();

        //cara yang ke 2

        Program::where('id', $program->id)->update([
            'nama' => $request->nama,
            'edulevel_id' => $request->edulevel_id,
            'student_price' => $request->student_price,
            'student_max' => $request->student_max,
            'info' => $request->info,

        ]);


        return redirect('programs')->with('status', 'program berhasil di Update!');


        // return $request;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete(); //deplete biasa 
        // $program->ForceDelete();  //delete paksa untuk soft delete

        return redirect('programs')->with('status', 'program berhasil di Hapus!');
    }
}
