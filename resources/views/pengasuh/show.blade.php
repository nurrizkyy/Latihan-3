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
                        <strong>Detail Pengasuh</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('pengasuhs') }}" class="btn btn-secondary btnn-sm">
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
                                        <th style="width:30%">Nama Pengasuh</th>
                                        <td>{{ $pengasuh->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>TTL</th>
                                        <td>{{$pengasuh->ttl}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{$pengasuh->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$pengasuh->gender}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$pengasuh->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pengajar</th>
                                        <td>{{$pengasuh->pengajar}}</td>
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