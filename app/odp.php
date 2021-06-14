<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class odp extends Model
{
    protected $table = 'odp';
    protected $fillable = ['nama','usia','kelamin','alamat','tgl_konfirmasi','status','keterangan'];
}
