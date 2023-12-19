@extends('main')

@section('title', 'Program')

@section('breadcrumbs')
<div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Pogram</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Program</a></li>
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
                        <strong>Edit Program</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('programs') }}" class="btn btn-secondary btnn-sm">
                            <i class="fa fa-undo"></i>Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('programs/'.$program->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Program</label>
                                    <input type="text" name="nama" class="form-control @error('nama')
                                    is-invalid @enderror" value="{{ old('nama', $program->nama) }}" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Status Jenjang</label>
                                    <select name="edulevel_id" class="form-control @error('edulevel_id')
                                    is-invalid @enderror">
                                        <option value="">-Pilih-</option>
                                        @foreach ($edulevel as $item)
                                            <option value="{{ $item->id }}" {{ old('edulevel_id', $program->edulevel_id) == $item->id ? 'selected' : null }} >{{ $item->nama}}</option>
                                        @endforeach
                                    </select>
                                    @error('edulevel_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>SPP Murid</label>
                                    <input type="number" name="student_price" class="form-control @error('student_price')
                                    is-invalid @enderror" value="{{ old('student_price', $program->student_price) }}" autofocus>
                                    @error('student_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Maksimal Murid</label>
                                    <input type="number" name="student_max" class="form-control @error('student_max')
                                    is-invalid @enderror" value="{{ old('student_max', $program->student_max) }}" autofocus>
                                    @error('student_max')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Info</label>
                                    <textarea name="info" class="form-control @error('info')
                                    is-invalid @enderror">{{ old('info', $program->info) }}</textarea>
                                    @error('info')
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