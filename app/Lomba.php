<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    //
    protected $table='lomba';
    protected $fillable =['judul','gambar','penyelenggara','tempat','deskripsi','waktu_pelaksanaan'];
}
