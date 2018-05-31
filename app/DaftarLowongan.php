<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarLowongan extends Model
{
    protected $fillable=['Nama','Pendidikan','Keahlian','No_telp','CV','lowongan_id'];
    public $tmestamps = true;

    public function Lowongan()
    {
        return $this->hasOne('App\Lowongan','lowongan_id');
    }
   }


