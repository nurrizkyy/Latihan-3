@extends('main')

@section('title', 'Edulevel')

@section('breadcrumbs')
<div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Edulevel</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Edulevel</a></li>
                                <li class="active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
    
@endsection

@section('content')
    <div class="content mt-3">

        <div class="animated fadeIn">
            <div class="card" >
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Status Jenjang</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('edulevels') }}" class="btn btn-secondary btnn-sm">
                            <i class="fa fa-undo"></i>Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('edulevels/' .$edulevel->id) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>Status Jenjang</label>
                                    <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" 
                                    value="{{ old('nama', $edulevel->nama) }}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="ket" class="form-control @error('ket')is-invalid @enderror">{{ old('ket', $edulevel->ket) }}</textarea>
                                    @error('ket')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                        
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection