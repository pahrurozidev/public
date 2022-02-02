@extends('layouts.app')

@section('content')
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Ubah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->nama }}">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" class="form-control" id="nis" value="{{ $siswa->nis }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ $siswa->tgl_lahir }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data Siswa</button>
                </form>
                <a href="{{ route('siswa.index') }}" class="btn btn-primary float-right">Kembali</a>
            </div>
        </div>
    </div>
@endsection
