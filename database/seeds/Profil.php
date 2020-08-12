<?php

use Illuminate\Database\Seeder;

class Profil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil')->insert([
            'foto' => null,            
            'deskripsi' => null,            
            'struktur' => null,            
            'visi' => null,            
            'misi' => null,            
            'penduduk' => null,            
            'luas' => null,            
            'dusun' => null,            
            'facebook' => null,            
            'instagram' => null,            
            'youtube' => null,            
            'telpon' => null,            
            'gmail' => null,            
        ]);
    }
}
