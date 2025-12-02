# Project PI – Sistem Manajemen Inventaris Barang Berbasis Web

Proyek ini dikembangkan sebagai tugas praktikum pada mata kuliah **Rekayasa Perangkat Lunak**. Aplikasi ini berfungsi untuk mengelola data inventaris barang secara sederhana melalui website, mencakup pencatatan barang, pembaruan stok, dan pencarian data. Sistem dibangun menggunakan PHP sebagai backend dan MySQL sebagai basis data utama.

Aplikasi ini dapat dijalankan secara lokal melalui XAMPP, Laragon, atau web server PHP lainnya.

## Fitur Utama
- Tambah barang baru ke dalam database  
- Edit dan perbarui stok barang  
- Hapus data barang yang tidak diperlukan  
- Pencarian barang berdasarkan nama atau kode  
- Tabel data dinamis dengan tampilan terstruktur  
- Sistem autentikasi sederhana untuk membatasi akses

## Struktur Direktori
- dashboard.php — Halaman utama setelah login  
- add_item.php — Form dan proses input barang  
- edit_item.php — Form dan logic untuk memperbarui barang  
- delete_item.php — Menghapus barang dari database  
- main.js — Fitur pencarian berbasis JavaScript  
- auth.php / config.php — Logika autentikasi & koneksi database  
- inventory_db.sql — Struktur dan data awal database

## Cara Menjalankan
1. Install XAMPP / Laragon.  
2. Clone repo / unzip ke folder `htdocs/` (XAMPP) atau `www/` (Laragon).  
3. Import `inventory_db.sql` lewat phpMyAdmin.  
4. Jalankan Apache & MySQL.  
5. Akses `http://localhost/inventory-management-system/`.

