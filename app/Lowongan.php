<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable=['Nama_Lowongan','id_perusahaan'];
    public $tmestamps = true;

    public function Perusahaan()
    {
        return $this->belongsTo('App\Perusahaan','id_perusahaan');
   }
}


