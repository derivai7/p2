<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_matakuliah';

    public function mahasiswa() {
        return $this->hasMany(MahasiswaModel::class, 'id');
    }

    public function matakuliah() {
        return $this->hasMany(MataKuliahModel::class, 'id');
    }
}
