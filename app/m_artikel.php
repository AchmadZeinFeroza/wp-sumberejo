<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_artikel extends Model
{
    protected $table = "artikel";
    protected $primaryKey = "id_artikel";
    protected $fillable = [
        'judul', 'deskripsi' , 'foto'
    ];
}
