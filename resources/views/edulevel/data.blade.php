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
                                <li class="active">Data</li>
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
                        <strong>Status Jenjang</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('edulevels/add') }}" class="btn btn-success btnn-sm">
                            <i class="fa fa-plus"></i>Tambah
                        </a>
                    </div>
                </div>
                <div class="card-body table responsive">
                    <table class="table table-border">
                        <thead>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($edulevels as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->ket }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('edulevels/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('edulevels/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin akan menghapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection