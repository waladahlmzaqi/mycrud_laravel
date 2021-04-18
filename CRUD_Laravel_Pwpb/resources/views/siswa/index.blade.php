@extends('template.master')
@push('link')
@endpush

@section('title', 'CRUD | Dashboard')
@section('judul', 'Dashboard')
@section('dashboard', 'active')
{{-- @section('data', 'active') --}}
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Data Siswa</h4>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb">
                <div class="ms-3">
                    <a class="btn btn-success" href="{{ route('siswa.create') }}"><i class="far fa-plus-square"></i> Tambah Siswa</a>
                </div>
            </div>
        </div>

        {{-- eror --}}
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><i class="fas fa-check-circle me-3"></i>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('warning'))
        <div class="alert alert-warning">
            <p><i class="fas fa-check-circle me-3"></i>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p><i class="fas fa-check-circle me-3"></i>{{ $message }}</p>
        </div>
        @endif
        {{-- eror --}}

        <div>
            <div class="container-fluid text-center">
                <table class="table table-bordered table-md table-hover">
                    <tr class="table-secondary">
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>No Absen</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td class="text-center">{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td>{{ $siswa->no_absen }}</td>
                        <td class="text-center">
                            <form action="{{ route('siswa.destroy',$siswa->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('siswa.show',$siswa->id) }}"><i class="far fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{ route('siswa.edit',$siswa->id) }}"><i class="far fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3  ms-auto">
            {{ $siswas->links()}}
        </div>
    </div>
</div>
@endsection
