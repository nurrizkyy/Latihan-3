@extends('main')

@section('title', 'Kegiatanumum')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Kegiatan Umum</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Kegitan Umum</a></li>
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
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Kegiatan</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('kegumums') }}" class="btn btn-secondary btnn-sm">
                            <i class="fa fa-undo"></i>Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('kegumums/' . $kegumums->id) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama')is-invalid @enderror"
                                        value="{{ old('nama', $kegumums->nama) }}">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="ket" class="form-control @error('ket')is-invalid @enderror">{{ old('ket', $kegumums->ket) }}</textarea>
                                    @error('ket')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hari</label>
                                    <input type="text" name="hari"
                                        class="form-control @error('hari')is-invalid @enderror"
                                        value="{{ old('hari', $kegumums->hari) }}">
                                    @error('hari')
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
