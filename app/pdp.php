<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pdp extends Model
{
    protected $table = 'pdp';
    protected $fillable = ['nama','usia','kelamin','alamat','tgl_konfirmasi','status','keterangan'];
}
