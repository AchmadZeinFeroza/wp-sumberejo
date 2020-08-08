<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_video extends Model
{
    protected $table = "video";
    protected $primaryKey = "id_video";
    protected $fillable = [
        'judul', 'link'
    ];
}
