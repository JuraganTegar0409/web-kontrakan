<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'occupants';
    protected $fillable = ['nama_penghuni', 'agama_penghuni', 'umur_penghuni', 'jenis_kelamin_penghuni', 'status_penghuni', 'foto_ktp', 'foto_surat_nikah', 'foto_kk']; 
}
