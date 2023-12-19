@extends('main')

@section('title', 'Full.Murid')

@section('breadcrumbs')
<div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Data Murid Reguler</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Daftar</a></li>
                                <li><a href="#">Data</a></li>
                                <li class="active">Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
    
@endsection

@section('content')
    <div class="content mt-3">

    <div class="animated fadeIn">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card" >
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Detail Data Murid</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('fulls/') }}" class="btn btn-secondary btnn-sm">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body table responsive">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width:30%">Nama Murid</th>
                                        <td>{{ $full->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>TTL</th>
                                        <td>{{$full->ttl}}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{$full->gender}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenjang Status</th>
                                        <td>{{$full->jenjang}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>{{$full->kelas}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Program</th>
                                        <td>{{$full->jenis_program}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{$full->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Wali</th>
                                        <td>{{$full->nama_wali}}</td>
                                    </tr>
                                    <tr>
                                        <th>No Hp</th>
                                        <td>{{$full->no_hp}}</td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection