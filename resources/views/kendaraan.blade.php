@extends('layouts.template')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Content -->
            <div class="card">
                <div class="card-header">
                    <strong>Nama</strong><br> {{ $data['name'] }}
                </div>
                <div class="card-footer">
                    <strong>Alamat</strong><br> {{ $data['address'] }}
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection
