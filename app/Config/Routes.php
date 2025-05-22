<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route untuk autentikasi
$routes->get('/login', 'Auth::login');      // Tampilkan form login
$routes->post('/login', 'Auth::login');     // Proses login
$routes->get('/register', 'Auth::register'); // Tampilkan form registrasi
$routes->post('/register', 'Auth::register'); // Proses registrasi
$routes->get('/logout', 'Auth::logout');     // Logout user

// Route untuk manajemen tugas
$routes->get('/tugas', 'Tugas::index');       // Tampilkan semua tugas
$routes->get('/tugas/tambah', 'Tugas::tambah'); // Form tambah tugas
$routes->post('/tugas/tambah', 'Tugas::tambah'); // Proses tambah tugas
$routes->get('/tugas/edit/(:num)', 'Tugas::edit/$1'); // Form edit tugas berdasarkan ID
$routes->post('/tugas/edit/(:num)', 'Tugas::edit/$1'); // Proses edit tugas
$routes->get('/tugas/hapus/(:num)', 'Tugas::hapus/$1'); // Hapus tugas berdasarkan ID
