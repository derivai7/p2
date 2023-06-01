<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\MahasiswaModel;
use App\Models\ProdiModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Application|Factory|View
    {
//        $mhs = MahasiswaModel::all();
//        return view('mahasiswa.mahasiswa')
//            ->with('title', 'Data Mahasiswa')
//            ->with('hobbies', HobiModel::all())
//            ->with('mhs', $mhs);

        return view('mahasiswa.mahasiswa-datatables')->with('title', 'Data Mahasiswa');
    }

    public function data(): JsonResponse
    {
        $data = MahasiswaModel::selectRaw('id, nim, nama, hp');

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {
        return view('mahasiswa.create_mahasiswa')
            ->with('title', 'Tambah Mahasiswa')
            ->with('prodi', ProdiModel::all())
            ->with('kelas', KelasModel::all())
            ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request): RedirectResponse
//    {
//        $request->validate([
//            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
//            'nama' => 'required|string|max:50',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'jk' => 'required|in:l,p',
//            'tempat_lahir' => 'required|string|max:50',
//            'tanggal_lahir' => 'required|date',
//            'alamat' => 'required|string|max:255',
//            'hp' => 'required|digits_between:6,15'
//        ]);
//
//        $imagePath = $request->file('image')->store('images', 'public');
//
//        MahasiswaModel::create([
//            'prodi_id' => $request->prodi_id,
//            'kelas_id' => $request->kelas_id,
//            'nim' => $request->nim,
//            'nama' => $request->nama,
//            'image' => $imagePath,
//            'jk' => $request->jk,
//            'tempat_lahir' => $request->tempat_lahir,
//            'tanggal_lahir' => $request->tanggal_lahir,
//            'alamat' => $request->alamat,
//            'hp' => $request->hp,
//        ]);
//
//        return redirect('mahasiswa')
//            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
//    }

    public function store(Request $request): JsonResponse
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.show_mahasiswa', ['title' => 'Detail Mahasiswa', 'mahasiswa' => $mahasiswa]);
    }

    public function nilai($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.nilai_mahasiswa', ['title' => 'Nilai Mahasiswa', 'mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): Application|Factory|View
    {
        $mhs = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa')
            ->with('title', 'Ubah Mahasiswa')
            ->with('prodi', ProdiModel::all())
            ->with('kelas', KelasModel::all())
            ->with('mhs', $mhs)
            ->with('url_form', url('/mahasiswa/' . $id));
    }

//    public function update(Request $request, $id): RedirectResponse
//    {
//        $request->validate([
//            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
//            'nama' => 'required|string|max:50',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'jk' => 'required|in:l,p',
//            'tempat_lahir' => 'required|string|max:50',
//            'tanggal_lahir' => 'required|date',
//            'alamat' => 'required|string',
//            'hp' => 'required|digits_between:6,15'
//        ]);
//
//        $mahasiswa = MahasiswaModel::find($id);
//
//        if ($request->hasFile('image')) {
//            if ($mahasiswa->image && file_exists(storage_path('app/public/' . $mahasiswa->image))) {
//                Storage::delete('public/' . $mahasiswa->image);
//            }
//
//            $imagePath = $request->file('image')->store('images', 'public');
//            $mahasiswa->image = $imagePath;
//        }
//
//        $mahasiswa->prodi_id = $request->prodi_id;
//        $mahasiswa->kelas_id = $request->kelas_id;
//        $mahasiswa->nim = $request->nim;
//        $mahasiswa->nama = $request->nama;
//        $mahasiswa->jk = $request->jk;
//        $mahasiswa->tempat_lahir = $request->tempat_lahir;
//        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
//        $mahasiswa->alamat = $request->alamat;
//        $mahasiswa->hp = $request->hp;
//        $mahasiswa->save();
//
//        return redirect('mahasiswa')->with('success', 'Mahasiswa Berhasil Diubah');
//    }

    public function update(Request $request, $id): JsonResponse
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs)? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }

    public function cetakNilai($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
//        $pdf = Pdf::loadview('mahasiswa.cetak_nilai_mahasiswa', ['mahasiswa' => $mahasiswa]);
//        return $pdf->stream();
        return view('mahasiswa.cetak_nilai_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }


    /**
     * Remove the specified resource from storage.
     */
//    public function destroy($id): RedirectResponse
//    {
//        $mahasiswa = MahasiswaModel::find($id);
//        if (file_exists(storage_path('app/public/' . $mahasiswa->image))) {
//            Storage::delete('public/' . $mahasiswa->image);
//        }
//        $mahasiswa->delete();
//        return redirect('mahasiswa')
//            ->with('success', 'Mahasiswa Berhasil Dihapus');
//    }

    public function destroy($id): JsonResponse
    {
        MahasiswaModel::find($id)->delete();

        return response()->json();
    }
}
