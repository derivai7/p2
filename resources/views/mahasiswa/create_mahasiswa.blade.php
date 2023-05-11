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
            <form method="post" action="{{ $url_form }}">
                @csrf
                {!!  (isset($mhs)) ? method_field('put') : '' !!}
                <div class="card-header">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input class="form-control @error('nim') is-invalid @enderror"
                               value="{{ isset($mhs) ? $mhs->nim : old('nim') }}" id="nim" name="nim"
                               type="text"/>
                        @error('nim')
                        <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <select class="form-control" id="prodi" name="prodi_id">
                            @foreach($prodi as $p)
                                <option value="{{ $p->id }}"
                                        @if(isset($mhs))
                                            @if($mhs->prodi_id == $p->id)
                                                selected
                                            @endif
                                        @endif>{{ $p->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas_id">
                            @foreach($kelas as $k)
                                <option value="{{ $k->id }}"
                                        @if(isset($mhs))
                                            @if($mhs->kelas_id == $k->id)
                                                selected
                                            @endif
                                        @endif>{{ $k->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input class="form-control @error('nama') is-invalid @enderror"
                               value="{{ isset($mhs) ? $mhs->nama : old('nama') }}" id="nama"
                               name="nama" type="text"/>
                        @error('nama')
                        <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="l"
                                   value="l" {{ (isset($mhs) AND $mhs->jk == 'l') ? 'checked' : '' }}>
                            <label class="form-check-label" for="l">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="p"
                                   value="p" {{ (isset($mhs) AND $mhs->jk == 'p') ? 'checked' : '' }}>
                            <label class="form-check-label" for="p">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input class="form-control @error('tempat_lahir') is-invalid @enderror"
                               value="{{ isset($mhs) ? $mhs->tempat_lahir : old('tempat_lahir') }}" id="tempat_lahir"
                               name="tempat_lahir" type="text"/>
                        @error('tempat_lahir')
                        <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror"
                               value="{{ isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir') }}" id="tanggal_lahir"
                               name="tanggal_lahir" type="date"/>
                        @error('tanggal_lahir')
                        <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input class="form-control @error('alamat') is-invalid @enderror"
                               value="{{ isset($mhs)? $mhs->alamat : old('alamat') }}" id="alamat"
                               name="alamat" type="text"/>
                        @error('alamat')
                        <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">HP</label>
                        <input class="form-control @error('hp') is-invalid @enderror"
                               value="{{ isset($mhs)? $mhs->hp : old('hp') }}" id="hp" name="hp"
                               type="text"/>
                        @error('hp')
                        <span class="error invalid-feedback">{{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>

        </div>
        <!-- Content -->

        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection


