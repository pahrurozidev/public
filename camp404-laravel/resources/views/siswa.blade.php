@extends('layouts.app')

@section('content')
    {{-- Data siswa --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <table class="table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Tanggal lahir</th>
                    </tr>
                    <tr>
                        <td>Andi Saputra</td>
                        <td>101</td>
                        <td>2003-12-22</td>
                    </tr>
                    <tr>
                        <td>Budi Cahya</td>
                        <td>102</td>
                        <td>2004-1-30</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
