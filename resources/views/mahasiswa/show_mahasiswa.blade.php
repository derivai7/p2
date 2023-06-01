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
            <form>
                <div class="card-header">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input class="form-control" value="{{ $mahasiswa->nim }}" id="nim" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <input class="form-control" value="{{ $mahasiswa->prodi->nama ?? null }}" id="prodi" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input class="form-control" value="{{ $mahasiswa->kelas->nama ?? null }}" id="kelas" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input class="form-control" value="{{ $mahasiswa->nama }}" id="nama" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input class="form-control" value="{{ ($mahasiswa->jk == 'l') ? 'Laki-laki' : 'Perempuan' }}"
                               id="jk" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
                        <input class="form-control"
                               value="{{ $mahasiswa->tempat_lahir }} {{ $mahasiswa->tanggal_lahir }}" id="ttl"
                               readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input class="form-control" value="{{ $mahasiswa->alamat }}" id="alamat" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">Nomor HP</label>
                        <input class="form-control" value="{{ $mahasiswa->hp }}" id="hp" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="hobi" class="form-label">Hobi</label>
                        @if(count($mahasiswa->hobbies) > 0)
                            @foreach($mahasiswa->hobbies as $i => $hobby)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="{{ $i }}" disabled>
                                    <label class="form-check-label" for="{{ $i }}">
                                        {{ $i+1 }}. {{ $hobby->hobi }}
                                    </label>
                                </div>
                            @endforeach
                        @else
                            <div class="text-secondary">
                                Hobi Kosong
                            </div>
                        @endif
                    </div>
                </div>
            </form>

        </div>
        <!-- Content -->

        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection


