# Article-Index-Web
Project Jalan-jalan
===================

Sebuah project sederhana berbasis PHP dan MySQL untuk menampilkan daftar artikel wisata.

Struktur Project:
-----------------
- index.php
- style.css
- README.txt
- (optional) folder /images untuk menyimpan gambar artikel

Struktur database:
ada beberapa tabel yang harus ada dalam database ini, yaitu:
- article (sebagai konten)
- author
- category
- article_author (penghubung yang menampung author article berdasarkan id)
- article_category (penghubung yang menampung article berdasarkan kategori dengan id)

Teknologi:
----------
- PHP
- MySQL Database
- HTML5 + CSS3
- (Opsional) XAMPP/Laragon untuk local server

Cara Instalasi:
---------------
1. Download atau clone project ini.
2. Buat database baru di MySQL, misal bernama "dbcms".
3. Import database dalam project ini atau buat sendiri sesuai kebutuhan.
4. Sesuaikan koneksi database di file index.php:
    $host = "localhost:3307"; //host default biasanya berupa "localhost"
    $user = "root";
    $pass = ""; //password database
    $db   = "dbcms_1"; //database

5. Letakkan semua file di dalam folder htdocs (jika menggunakan XAMPP) atau di dalam folder www (jika menggunakan laragon).
6. Akses melalui browser:
    http://localhost:3307/namaproject/index.php

Fitur:
------
- Menampilkan daftar artikel dengan:
    - Judul
    - Nama Penulis
    - Tanggal Terbit
    - Gambar
    - Konten
- Gambar default akan digunakan jika tidak ada gambar di database.
- Desain minimalis dan responsif menggunakan CSS.

Kontributor: (opsional)
------------
- Kevin2025

Catatan Tambahan:
-----------------
- Pastikan port database sudah benar.
- Jika tidak ada gambar, maka akan kosong.
- Cocok untuk belajar PHP dasar dan konsep relasi database.

------------------------
Copyright Kevin2025
