<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Muhammad Ayyub Ramli',
            'email' => 'ayyub@student.telkomuniversity.ac.id',
            'password' => bcrypt('ayyub1234'),
            'jurusan' => 'S1 Sistem Informasi',
            'jenis_kelamin' => 'Laki - laki',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Ivan Setiawan',
            'email' => 'ivan@student.telkomuniversity.ac.id',
            'password' => bcrypt('ivan1234'),
            'jurusan' => 'S1 Sistem Informasi',
            'jenis_kelamin' => 'Laki - laki',
            'remember_token' =>  Str::random(60)
        ]);
    
        DB::table('users')->insert([
            'nama' => 'Ari Dwi Setyawan',
            'email' => 'dwi@student.telkomuniversity.ac.id',
            'password' => bcrypt('dwi1234'),
            'jurusan' => 'S1 Sistem Informasi',
            'jenis_kelamin' => 'Laki - laki',
            'remember_token' =>  Str::random(60)
        ]);
    }
}
