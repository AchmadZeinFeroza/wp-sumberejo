<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_profil extends Model
{
    protected $table = "profil";
    protected $primaryKey = "id_profil";
    protected $fillable = [
         'deskripsi' , 'foto' , 'struktur' , 'visi' , 'misi' , 'facebook' , 'telpon', 'instagram', 'youtube' , 'gmail' 
    ];
}
