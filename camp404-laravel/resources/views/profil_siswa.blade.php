@extends('layouts.app')

@section('content')

    <div class="container col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>Profil Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row ml-2">
                    <h4 class="col-6">Nama</h4>
                    <h4>: {{ $siswa->nama }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-6">NIS</h4>
                    <h4>: {{ $siswa->nis }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-6">Tanggal Lahir</h4>
                    <h4>: {{ $siswa->tgl_lahir }}</h4>
                </div>
                @can('isAdmin')
                    <a href="{{ route('siswa.index') }}" class="btn btn-primary float-right mt-3">Kembali</a>
                @endcan
            </div>
        </div>
    </div>
@endsection
