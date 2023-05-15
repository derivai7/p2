@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="container">
                    <form action="/articles" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text" class="form-control" required="required" name="title"></br>
                            <label for="content">Content: </label>
                            <textarea type="text" class="form-control" required="required"
                                      name="isi"></textarea>
                            <label for="image">Feature Image: </label>
                            <input type="file" class="form-control" required="required" name="image"></br>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <!-- /.content -->
@endsection



