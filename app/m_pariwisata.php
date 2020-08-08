<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pariwisata extends Model
{
    protected $table = "pariwisata";
    protected $primaryKey = "id_pariwisata";
    protected $fillable = [
        'nama', 'deskripsi', 'foto',  'lokasi', 'youtube'
    ];
}
