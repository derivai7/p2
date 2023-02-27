@extends('layouts.template')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Content -->
            <div class="card">
                <div class="card-body">
                    Selamat Datang!
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection

@push('additional-js')
    alert('Selamat Datang')
@endpush
