<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class positif extends Model
{
    protected $table = 'positif';
    protected $fillable = ['nama','usia','kelamin','alamat','tgl_konfirmasi','status','keterangan'];
}
