<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = "pendaftarans";
    protected $primaryKey = "id_pendaftaran";

    protected $fillable = [
        'id_mahasiswa',
        'id_ukm',
        'nama_ukm',
        'nama', 	
        'nim', 	
        'jurusan', 	
        'jk', 	
        'alamat', 	
        'email', 	
        'no_hp',
        'ksm', 	
        'khs', 	
        'cv',
        'status', 	
    ];
}
