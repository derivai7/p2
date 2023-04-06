<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Application|Factory|View
    {
        $mhs = MahasiswaModel::all();
        return view('mahasiswa.mahasiswa')
            ->with('title', 'Data Mahasiswa')
            ->with('mhs', $mhs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {
        return view('mahasiswa.create_mahasiswa')
            ->with('title', 'Tambah Mahasiswa')
            ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);

        MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
//    public function show(MahasiswaModel $mahasiswa): Response
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): Application|Factory|View
    {
        $mhs = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa')
            ->with('title', 'Ubah Mahasiswa')
            ->with('mhs', $mhs)
            ->with('url_form', url('/mahasiswa/' . $id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'hp' => 'required|digits_between:6,15'
        ]);

        MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
