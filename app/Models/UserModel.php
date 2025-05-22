<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel di database
    protected $allowedFields = ['username', 'password']; // Field yang boleh diisi
    protected $useTimestamps = false; // Tidak menggunakan created_at / updated_at otomatis
}
