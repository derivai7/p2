<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;

    protected $table = 'keluarga';

//    mengubah ke route data binding

//    public static function find($slug) {
//        return KeluargaModel::all()->firstWhere('slug', $slug);
//    }
}
