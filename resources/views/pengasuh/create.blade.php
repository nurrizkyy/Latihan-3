@extends('main')

@section('title', 'Pengasuh')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Pengasuh</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Pengasuh</a></li>
                        <li class="active">Add</li>
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
                        <strong>Tambah Pengasuh</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('pengasuhs') }}" class="btn btn-secondary btnn-sm">
                            <i class="fa fa-undo"></i>Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('pengasuhs') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Pengasuh</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama')
                                    is-invalid @enderror"
                                        value="{{ old('nama') }}" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>TTL</label>
                                    <input type="date" name="ttl"
                                        class="form-control @error('ttl')
                                    is-invalid @enderror">
                                    @error('ttl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat"
                                        class="form-control @error('alamat')
                                    is-invalid @enderror"
                                        value="{{ old('alamat') }}" autofocus>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" name="gender"
                                        class="form-control @error('gender')
                                    is-invalid @enderror"
                                        value="{{ old('gender') }}" autofocus>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <input name="status"
                                        class="form-control @error('status')
                                    is-invalid @enderror">{{ old('info') }}
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Pengajar</label>
                                    <input name="pengajar"
                                        class="form-control @error('pengajar')
                                    is-invalid @enderror">{{ old('pengajar') }}
                                    @error('pengajar')
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
