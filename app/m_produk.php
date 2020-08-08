<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_produk";
    protected $fillable = [
        'judul', 'deskripsi' , 'foto'
    ];
}
