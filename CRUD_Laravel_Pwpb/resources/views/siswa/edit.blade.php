@extends('template.master')
@push('link')
<style>
    .card{
        width: 650px;
        margin: 0px auto;
    }
</style>
@endpush

@section('title', 'CRUD | Tambah Data')
@section('judul', 'Tambah Data')
@section('dashboard', 'active')
{{-- @section('data', 'active') --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Data Siswa</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                  <label class="col-form-label ps-3"><strong>Nama</strong></label>
                </div>
                <div class="col-9">
                  <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                  <label class="col-form-label ps-3"><strong>Kelas</strong></label>
                </div>
                <div class="col-9">
                  <input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                  <label class="col-form-label ps-3"><strong>Jurusan</strong></label>
                </div>
                <div class="col-9">
                  <input type="text" class="form-control" name="jurusan" value="{{ $siswa->jurusan }}">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-3">
                  <label class="col-form-label ps-3"><strong>No Absen</strong></label>
                </div>
                <div class="col-9">
                  <input type="text" class="form-control" name="no_absen" value="{{ $siswa->no_absen }}">
                </div>
            </div>
            <div class="row g-3 d-flex justify-content-end mb-3 mt-3">
                <div class="col-auto">
                    <a class="btn btn-warning me-3" href="{{ route('siswa.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
