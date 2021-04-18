@extends('template.master')

@section('title', 'CRUD | Detail')
@section('judul', 'Detail Siswa')
@section('dashboard', 'active')
{{-- @section('data', 'active') --}}
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detail Siswa {{ $siswa->nama }}</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">No Absen</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->jurusan }}</td>
                <td>{{ $siswa->no_absen }}</td>
              </tr>
            </tbody>
        </table>
        <div class="row g-3 d-flex justify-content-start mb-3 mt-3">
            <div class="col-auto">
                <a class="btn btn-primary me-3" href="{{ route('siswa.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>

@endsection
