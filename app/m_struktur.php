<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_struktur extends Model
{
    protected $table = "struktur";
    protected $primaryKey = "id_struktur";
    protected $fillable = [
        'nama' , 'jabatan' , 'foto'
    ];
}
