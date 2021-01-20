<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    protected $table = 'tbl_mahasiswa';
    protected $fillable = ['nama_mhs', 'nim', 'alamat'];
    protected $dates = ['deleted_at'];
}
