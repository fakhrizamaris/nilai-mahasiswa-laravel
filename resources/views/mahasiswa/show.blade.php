@extends('layouts.app')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <table class="table">
        <tr>
            <th>Nama:</th>
            <td>{{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
            <th>NIM:</th>
            <td>{{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <th>Jurusan:</th>
            <td>{{ $mahasiswa->jurusan }}</td>
        </tr>
        <tr>
            <th>Nilai:</th>
            <td>{{ $mahasiswa->nilai }}</td>
        </tr>
    </table>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
