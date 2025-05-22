<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{

    // Menangani proses login
    public function login()
    {
        helper(['form']); // Memuat helper form
        if ($this->request->getMethod() === 'post') { // Jika metode request POST
            $model = new UserModel(); // Buat instance model user
            $user = $model->where('username', $this->request->getPost('username'))->first(); // Cari user berdasarkan username
            if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                // Jika password cocok, simpan data ke session
                session()->set([
                    'user_id' => $user['id'],
                    'username' => $user['username']
                ]);
                return redirect()->to('/tugas'); // Arahkan ke halaman tugas
            }
            // Jika login gagal
            return redirect()->back()->with('error', 'Login gagal');
        }
        return view('auth/login'); // Tampilkan view login
    }

    // Menangani proses registrasi
    public function register()
    {
        helper(['form']); // Memuat helper form
        if ($this->request->getMethod() === 'post') { // Jika request POST
            $model = new UserModel(); // Buat instance model user
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash password
            ];
            $model->insert($data); // Simpan data user ke database
            return redirect()->to('/login'); // Redirect ke halaman login
        }
        return view('auth/register'); // Tampilkan view register
    }

    // Logout user
    public function logout()
    {
        session()->destroy(); // Hapus session
        return redirect()->to('/login'); // Redirect ke login
    }
}
