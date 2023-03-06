@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Hobi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Content -->
        @foreach($hobi as $i => $h)
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold">{{ $i+1 }}. {{ $h->hobi }}</h5>
                </div>
                <div class="card-body">
                    <p>Alasan:</p>
                    <p>{{ $h->alasan }}</p>
                </div>
            </div>
        @endforeach
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
