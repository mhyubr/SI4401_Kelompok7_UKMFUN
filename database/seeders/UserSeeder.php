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
        // TELUTIZEN
        DB::table('users')->insert([
            'nama' => 'Muhammad Ayyub Ramli',
            'email' => 'ayyub@student.telkomuniversity.ac.id',
            'password' => bcrypt('1'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Ivan Setiawan',
            'email' => 'ivan@student.telkomuniversity.ac.id',
            'password' => bcrypt('ivan'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Ari Dwi Setyawan',
            'email' => 'dwi@student.telkomuniversity.ac.id',
            'password' => bcrypt('dwi'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'ASTACALA',
            'email' => 'astacala@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('1'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'KBMS',
            'email' => 'kbms@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kbms'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'IMABEST',
            'email' => 'imabest@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('imabest'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

    }
}
