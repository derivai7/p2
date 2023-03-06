@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Kendaraan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Content -->
        <div class="row ">
            @foreach($kendaraan as $i => $k)
                <div class="card mx-3" style="width: 20rem;">
                    <div class="card-header">
                        Kendaraan ke -{{ $i+1 }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $k->nopol }}</li>
                        <li class="list-group-item">{{ $k->merk }}</li>
                        <li class="list-group-item">{{ $k->jenis }}</li>
                        <li class="list-group-item">{{ $k->tahun_buat }}</li>
                        <li class="list-group-item">{{ $k->warna }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
