@extends('main')

@section('title', 'Daftar')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-12">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Murid Reguler</h1>
                </div>

                <div class="card">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogForm"
                        wire:click.prevent="create">
                        Daftar
                    </button>
                </div>
            </div>
        </div>

    @endsection

    @section('content')
        <div class="content">
            <div class="container">
                <div class="center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div wire:ignore.self class="modal fade" id="dialogForm" tabindex="-1" role="dialog"
                                aria-labelledby="dialogFormLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="dialogFormLabel">Create New Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true close-btn">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('regulers') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Nama Murid</label>
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
                                                    <label>Gender</label>
                                                    <input type="text" name="gender"
                                                        class="form-control @error('gender')
                                    is-invalid @enderror">
                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Status Jenjang</label>
                                                    <input type="text" name="jenjang"
                                                        class="form-control @error('jenjang')
                                    is-invalid @enderror">
                                                    @error('jenjang')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Kelas</label>
                                                    <input type="text" name="kelas"
                                                        class="form-control @error('kelas')
                                    is-invalid @enderror"
                                                        value="{{ old('kelas') }}" autofocus>
                                                    @error('kelas')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Jenis Program</label>
                                                    <input type="text" name="jenis_program"
                                                        class="form-control @error('jenis_program')
                                        is-invalid @enderror"
                                                        value="{{ old('jenis_program') }}" autofocus>
                                                    @error('jenis_program')
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
                                                    <label>Nama Wali</label>
                                                    <input type="text" name="nama_wali"
                                                        class="form-control @error('nama_wali')
                                    is-invalid @enderror">{{ old('nama_wali') }}
                                                    @error('nama_wali')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>No Hp</label>
                                                    <input type="text" name="no_hp"
                                                        class="form-control @error('no_hp')
                                    is-invalid @enderror">{{ old('no_hp') }}
                                                    @error('no_hp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-success ">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <table class="table table-sm table-striped">
                    <thead>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jenjang Status</th>
                        <th></th>
                    </thead>

                    <tbody>
                        @foreach ($reguler as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenjang }}</td>
                                <td class="text-center">
                                    <a href="{{ url('regulers/' . $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('regulers/' . $item->id) . '/edit' }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{ url('regulers/' . $item->id) }}" method="post" class="d-inline"
                                        onsubmit="return confirm('Yakin akan menghapus data?')">
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
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
