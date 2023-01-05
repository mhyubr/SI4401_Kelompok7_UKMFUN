<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ukms')->insert([
            'nama' => 'Astacala',
            'email' => 'astacala@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('astacala1234'),
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('ukms')->insert([
            'nama' => 'Keluarga Besar Mahasiswa Sulawesi (KBMS)',
            'email' => 'kbms@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kbms1234'),
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('ukms')->insert([
            'nama' => 'Ikatan Mahasiswa Beasiswa OPES Telkom (IMABEST)',
            'email' => 'imabest@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('imabest1234'),
            'remember_token' =>  Str::random(60)
        ]);
    }
}
