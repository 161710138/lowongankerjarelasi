<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable=['Nama_Perusahaan','Alamat','Deskripsi'];
    public $tmestamps = true;

    public function Lowongan()
    {
        return $this->hasMany('App\Lowongan','id_Perusahaan');
   }
}
