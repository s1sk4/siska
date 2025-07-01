<?php

$routes->get('/', 'Main::index');
$routes->match(['get', 'post'], 'home/tambah', 'Home::tambah'); //menambahkan post jika menggunakan match karena sudah punya method tambah() di dalam Home controller dan ingin menambahkan data dari form