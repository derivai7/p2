@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail {{ $keluarga->status }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Content -->
        <div class="card">
            <div class="card-header">
                <strong>Nama</strong><br> {{ $keluarga->nama }}
            </div>
            <div class="card-body">
                <strong>Jenis Kelamin</strong><br>
                @if($keluarga->jk == 'l')
                    Laki-laki
                @elseif($keluarga->jk == 'p')
                    Perempuan
                @endif
            </div>
            <div class="card-footer bg-white border-top">
                <strong>Tempat Tinggal</strong><br>
                {{ $keluarga->tempat_tinggal }}
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
