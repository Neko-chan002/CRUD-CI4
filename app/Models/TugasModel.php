<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table = 'tugas'; // Nama tabel di database
    protected $allowedFields = ['judul', 'deskripsi', 'deadline', 'status', 'user_id']; // Field yang diizinkan
    protected $useTimestamps = false; // Tidak menggunakan timestamps otomatis
}
