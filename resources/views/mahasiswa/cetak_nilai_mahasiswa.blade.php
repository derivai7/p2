<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Nilai {{ $mahasiswa->nama }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

    @stack('additional-css')
</head>
<body class="container-fluid">
<section class="content-header">
    <div class="text-center">
        <h4>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h4>
        <h2>KARTU HASIL STUDI (KHS)</h2>
    </div>
    <div class="container-fluid d-flex my-3">
        <div class="pr-5">
            <p class="font-weight-bold">Nama</p>
            <p class="font-weight-bold">NIM</p>
            <p class="font-weight-bold">Prodi</p>
            <p class="font-weight-bold">Kelas</p>
        </div>
        <div>
            <p>: {{ $mahasiswa->nama }}</p>
            <p>: {{ $mahasiswa->nim }}</p>
            <p>: {{ $mahasiswa->prodi->nama }}</p>
            <p>: {{ $mahasiswa->kelas->nama }}</p>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Nilai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahasiswa->mahasiswaMatakuliah as $m)
            <tr>
                @foreach($m->matakuliah as $mk)
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->semester }}</td>
                @endforeach
                <td>{{ $m->nilai }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- Content -->
</section>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
