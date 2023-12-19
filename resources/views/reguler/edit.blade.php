@extends('main')

@section('title', 'Reguler')

@section('breadcrumbs')
<div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Data Murid Full</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Data</a></li>
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
                        <strong>Edit Data</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('regulers') }}" class="btn btn-secondary btnn-sm">
                            <i class="fa fa-undo"></i>Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('regulers/'.$reguler->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Murid</label>
                                    <input type="text" name="nama" class="form-control @error('nama')
                                    is-invalid @enderror" value="{{ old('nama', $reguler->nama) }}" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>TTL</label>
                                    <input type="date" name="ttl" class="form-control @error('ttl')
                                    is-invalid @enderror" value="{{ old('ttl', $reguler->ttl) }}" autofocus>
                                    @error('ttl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" name="gender" class="form-control @error('gender')
                                    is-invalid @enderror" value="{{ old('gender', $reguler->gender) }}" autofocus>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Status Jenjang</label>
                                    <input type="text" name="jenjang" class="form-control @error('jenjang')
                                    is-invalid @enderror" value="{{ old('jenjang', $reguler->jenjang) }}" autofocus>
                                    @error('jenjang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" name="kelas" class="form-control @error('kelas')
                                    is-invalid @enderror"value="{{ old('nama', $reguler->nama) }}" autofocus>
                                    @error('kelas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                    
                                    <div class="form-group">
                                        <label>Jenis Program</label>
                                        <input type="text" name="jenis_program" class="form-control @error('jenis_program')
                                        is-invalid @enderror" value="{{ old('jenis_program', $reguler->jenis_program) }}" autofocus>
                                        @error('jenis_program')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control @error('alamat')
                                    is-invalid @enderror" value="{{ old('alamat', $reguler->alamat) }}" autofocus>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nama Wali</label>
                                    <input type="text" name="nama_wali" class="form-control @error('nama_wali')
                                    is-invalid @enderror" value="{{ old('nama_wali', $reguler->nama_wali) }}" autofocus>
                                    @error('nama_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="text" name="no_hp" class="form-control @error('no_hp')
                                    is-invalid @enderror" value="{{ old('no_hp', $reguler->no_hp) }}" autofocus>
                                    @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
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