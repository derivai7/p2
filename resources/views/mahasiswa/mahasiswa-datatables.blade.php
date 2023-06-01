@extends('layouts.template')

@push('additional-css-datatables')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

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
            <button class="mb-3 btn btn-success btn-tambah-mahasiswa" data-toggle="modal"
                    data-target="#modal_mahasiswa">Tambah Mahasiswa
            </button>
        </div>
        <table class="table table-striped" id="data">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">HP</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

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

    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"/>
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"/>
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">No. HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apakah Anda yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda tidak akan dapat mengembalikan ini!</p>
                </div>
                <div class="modal-footer">
                    <form id="delete_mahasiswa" method="post" action="">
                        @csrf
                        <button type="submit" class="btn btn-danger">Ya, hapus</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('additional-js')
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-tambah-mahasiswa', function () {
                $('#modal_mahasiswa #nim').val('').attr('readonly', false);
                $('#modal_mahasiswa #nama').val('').attr('readonly', false);
                $('#modal_mahasiswa #hp').val('').attr('readonly', false);
                $('#modal_mahasiswa .btn.btn-success').html('Tambah').show();
            });

            $(document).on('click', '.btn-detail-mahasiswa', function () {
                const th = $(this);
                $('#modal_mahasiswa').modal('show');
                $('#modal_mahasiswa .modal-title').html('Detail Mahasiswa');
                $('#modal_mahasiswa #nim').val(th.data('nim')).attr('readonly', true);
                $('#modal_mahasiswa #nama').val(th.data('nama')).attr('readonly', true);
                $('#modal_mahasiswa #hp').val(th.data('hp')).attr('readonly', true);
                $('#modal_mahasiswa .btn.btn-success').hide();
            });

            $(document).on('click', '.btn-edit-mahasiswa', function () {
                const th = $(this);
                $('#modal_mahasiswa').modal('show');
                $('#modal_mahasiswa .modal-title').html('Edit Mahasiswa');
                $('#modal_mahasiswa #nim').val(th.data('nim')).attr('readonly', false);
                $('#modal_mahasiswa #nama').val(th.data('nama')).attr('readonly', false);
                $('#modal_mahasiswa #hp').val(th.data('hp')).attr('readonly', false);
                $('#modal_mahasiswa .btn.btn-success').html('Ubah').show();
                $('#modal_mahasiswa #form_mahasiswa').attr('action', th.data('url'));
                $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
            });

            $(document).on('click', '.btn-delete-mahasiswa', function () {
                const deleteButton = $(this);
                $('#modal_delete').modal('show');
                $('#modal_delete #delete_mahasiswa').attr('action', deleteButton.data('url'));
            });

            const dataMahasiswa = $('#data').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ url('mahasiswa/data') }}',
                    dataType: 'json',
                    type: 'POST',
                },
                columns: [
                    {
                        data: null,
                        sortable: false,
                        searchable: false,
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {data: 'nim', name: 'nim'},
                    {data: 'nama', name: 'nama'},
                    {data: 'hp', name: 'hp'},
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            return `
                                <div style="display: flex;">
                                    <button class="btn btn-sm btn-success mr-2 btn-detail-mahasiswa" data-id="${row.id}" data-nim="${row.nim}" data-nama="${row.nama}" data-hp="${row.hp}"><i class="far fa-eye"></i></button>
                                    <button data-url="mahasiswa/${data}" class="btn btn-sm btn-primary mr-2 btn-edit-mahasiswa" data-id="${row.id}" data-nim="${row.nim}" data-nama="${row.nama}" data-hp="${row.hp}"><i class="fas fa-edit"></i></button>
                                    <button data-url="mahasiswa/${data}" class="btn btn-sm btn-danger btn-delete-mahasiswa" data-id=${row.id}><i class="fas fa-trash-alt"></i></button>
                                </div>
                            `;
                        }
                    }
                ]
            });

            $('#form_mahasiswa').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }
                    }
                });
            });

            $('#delete_mahasiswa').submit(function(event) {
                event.preventDefault();

                const url = $(this).attr('action');

                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        dataMahasiswa.ajax.reload();
                        $('#modal_delete').modal('hide');
                        alert('Berhasil menghapus data.');
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan saat menghapus data.');
                    }
                });
            });
        });
    </script>
@endpush
