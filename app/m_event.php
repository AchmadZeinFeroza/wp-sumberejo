<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_event extends Model
{
    protected $table = "event";
    protected $primaryKey = "id_event";
    protected $fillable = [
        'nama', 'deskripsi', 'tgl', 'foto', 'waktu', 'lokasi','penyelenggara'
    ];
}
