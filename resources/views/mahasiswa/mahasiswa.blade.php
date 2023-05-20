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
        <div class="my-2">
            <a href="{{ url('/mahasiswa/create') }}" class="mb-3 btn btn-success">Tambah Mahasiswa</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat, tanggal Lahir</th>
                <th scope="col">HP</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($mhs) > 0)
                @foreach($mhs as $i => $m)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->prodi->nama }}</td>
                        <td>{{ $m->kelas->nama }}</td>
                        <td>{{ $m->nama }}</td>
                        <td><img width="100px" src="{{ asset('storage/' . $m->image) }}" alt="Foto Mahasiwa"></td>
                        <td>{{ ($m->jk == 'l') ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $m->tempat_lahir . ', ' . $m->tanggal_lahir }}</td>
                        <td>{{ $m->hp }}</td>
                        {{--Tombol edit dan delete--}}
                        <td class="d-flex">
                            <a href="{{ url('/mahasiswa/' . $m->id) }}"
                               class="btn btn-sm btn-success mr-2"><i class="far fa-eye"></i></a>
                            <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}"
                               class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('/mahasiswa/' . $m->id . '/nilai') }}"
                               class="btn btn-sm btn-secondary mr-2"><i class="fas fa-user-graduate"></i></a>
                            <form method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10" class="text-center">Data tidak ada</td>
                </tr>
            @endif
            </tbody>
        </table>
        <!-- Content -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
    </section>
    <!-- /.content -->
@endsection
