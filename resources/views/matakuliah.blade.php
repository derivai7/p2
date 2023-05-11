@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Mata Kuliah</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Content -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Jam</th>
                <th scope="col">Semester</th>
            </tr>
            </thead>
            <tbody>
            @foreach($matakuliah as $i => $m)
            <tr>
                <th scope="row">{{ $i + 1 }}</th>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->sks }}</td>
                <td>{{ $m->jam }}</td>
                <td>{{ $m->semester }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
