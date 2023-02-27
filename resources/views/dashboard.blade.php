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

@push('additional-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css"
          integrity="sha256-sWZjHQiY9fvheUAOoxrszw9Wphl3zqfVaz1kZKEvot8=" crossorigin="anonymous">
@endpush

@push('additional-js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"
            integrity="sha256-5WYg3s9NxGKR2MpEBTy0QMT3Gvgxl3yKjbW4l0CfUUY=" crossorigin="anonymous"></script>
    <script>
        Swal.fire('Selamat Datang')
    </script>
@endpush
