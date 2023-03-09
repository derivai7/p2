@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Keluarga</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Content -->
        <div class="row">
            @foreach($keluarga as $k)
                <div class="card mx-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5 class="card-title">{{ $k->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $k->status }}</h6>
                        <a href="keluarga/{{ $k->slug }}" class="card-link">Lihat detail</a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
