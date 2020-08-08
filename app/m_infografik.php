<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_infografik extends Model
{
    protected $table = "infografik";
    protected $primaryKey = "id_infografik";
    protected $fillable = [
        'judul', 'foto'
    ];
}
