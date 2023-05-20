<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'prodi_id',
        'kelas_id',
        'nim',
        'nama',
        'image',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp'
    ];

    public function prodi() {
        return $this->belongsTo(ProdiModel::class);
    }

    public function hobbies() {
        return $this->hasMany(HobiModel::class, 'mahasiswa_id');
    }

    public function kelas() {
        return $this->belongsTo(KelasModel::class);
    }

    public function mahasiswaMatakuliah() {
        return $this->hasMany(MahasiswaMataKuliahModel::class, 'mahasiswa_id');
    }
}
