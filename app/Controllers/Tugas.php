<?php

namespace App\Controllers;

use App\Models\TugasModel;
use CodeIgniter\Controller;

class Tugas extends Controller
{
    public function index()
    {
        $model = new TugasModel();
        // Ambil semua data tugas berdasarkan user_id yang sedang login
        $data['tugas'] = $model->where('user_id', session()->get('user_id'))->findAll();
        return view('tugas/index', $data); // Tampilkan ke view
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $model = new TugasModel();
            // Simpan data tugas baru ke database
            $model->save([
                'judul' => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'deadline' => $this->request->getPost('deadline'),
                'status' => $this->request->getPost('status'),
                'user_id' => session()->get('user_id'), // Hubungkan ke user yang sedang login
            ]);
            return redirect()->to('/tugas'); // Redirect ke halaman daftar tugas
        }

        // Tampilkan form tambah tugas
        return view('tugas/tambah');
    }

    public function edit($id)
    {
        $model = new TugasModel();
        if ($this->request->getMethod() === 'post') {
            // Update data tugas berdasarkan ID
            $model->update($id, [
                'judul' => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'deadline' => $this->request->getPost('deadline'),
                'status' => $this->request->getPost('status'),
            ]);
            return redirect()->to('/tugas'); // Redirect setelah update
        }

        // Ambil data tugas berdasarkan ID untuk diedit
        $data['tugas'] = $model->find($id);
        return view('tugas/edit', $data);
    }

    public function hapus($id)
    {
        $model = new TugasModel();
        // Hapus tugas berdasarkan ID
        $model->delete($id);
        return redirect()->to('/tugas'); // Redirect ke daftar tugas
    }
}
