<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';

    public function mahasiswaMatakuliah() {
        return $this->hasMany(MahasiswaMataKuliahModel::class, 'matakuliah_id');
    }
}
