@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Mahasiswa</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="" class="btn btn-success">Tambah Mahasiswa</a>
            </div>
            <div class="card-body">

            </div>

        </div>
        <!-- Content -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat, tanggal Lahir</th>
                <th scope="col">HP</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(empty($mhs))
                @foreach($mhs as $i => $m)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->jenis_kelamin }}</td>
                        <td>{{ $m->tempat_lahir . ', ' . $m->tanggal_lahir }}</td>
                        <td>{{ $m->hp }}</td>
                        {{--Tombol edit dan delete--}}
                        <td>
                            <a href="{{ url('/mahasiswa' . $m->id . '/edit') }}" class="btn btn-primary">Edit</a> |
                            <a href="{{ url('/mahasiswa' . $m->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center">Data tidak ada</td>
                </tr>
            @endif
            </tbody>
        </table>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
