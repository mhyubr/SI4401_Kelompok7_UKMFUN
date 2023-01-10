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
            'password' => bcrypt('ayyub'),
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
            'nama' => 'Anugrah Bagas',
            'email' => 'bagas@student.telkomuniversity.ac.id',
            'password' => bcrypt('bagas'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Nur Afni',
            'email' => 'afni@student.telkomuniversity.ac.id',
            'password' => bcrypt('afni'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Amanda Aurelie',
            'email' => 'manda@student.telkomuniversity.ac.id',
            'password' => bcrypt('manda'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Ni putu Diah',
            'email' => 'diah@student.telkomuniversity.ac.id',
            'password' => bcrypt('diah'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Andi Aswan',
            'email' => 'aswan@student.telkomuniversity.ac.id',
            'password' => bcrypt('aswan'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'ASTACALA',
            'email' => 'astacala@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('astacala'),
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

        DB::table('users')->insert([
            'nama' => 'KBSU',
            'email' => 'kbsu@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kbsu'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'pmi',
            'email' => 'pmi@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('pmi'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'kmk',
            'email' => 'kmk@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kmk'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Nippon',
            'email' => 'nippon@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('nippon'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'BTS',
            'email' => 'bts@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('bts'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

    }
}
