📦 Inventory Management System — Ujian RPL 2
Project ini merupakan tugas Ujian RPL 2 yang berfokus pada pembuatan aplikasi sederhana untuk pengelolaan inventori barang.
Aplikasi ini mendukung proses pencatatan, pembaruan, dan penghapusan data barang, serta dilengkapi autentikasi dasar.
Seluruh fitur dibuat menggunakan PHP Native, MySQL, HTML, CSS, dan JavaScript.

🚀 Fitur Utama Aplikasi
✔️ Tambah barang baru ke dalam database

✔️ Edit dan perbarui stok barang

✔️ Hapus data barang yang tidak diperlukan

✔️ Pencarian barang berdasarkan nama atau kode

✔️ Tabel data dinamis untuk menampilkan keseluruhan stok

✔️ Sistem autentikasi untuk membatasi akses pengguna

✔️ Integrasi HTML, CSS, dan JavaScript untuk antarmuka yang responsif

📁 Struktur Direktori
Berikut file–file utama yang digunakan dalam sistem ini:

File / Folder	Fungsi
dashboard.php	Halaman utama setelah login, menampilkan tabel inventori
add_item.php	Form dan proses penambahan barang baru
edit_item.php	Form dan logic update data barang
delete_item.php	Menghapus data barang
search.js	Fitur pencarian barang menggunakan JavaScript
auth.php	Logika autentikasi login
config.php	Koneksi database MySQL
inventory_db.sql	Struktur database dan data awal
🗄️ Database
Import file berikut ke phpMyAdmin:

📄 inventory_db.sql

Database memuat:

Tabel barang

User untuk login

Stok awal contoh data

🛠 Cara Menjalankan Proyek
Install XAMPP / Laragon

Pindahkan folder project ke:

xampp/htdocs/
Import database:

Buka phpMyAdmin

Buat database baru: inventory_db

Import file inventory_db.sql

Buka di browser:

http://localhost/ujian/
Login dan mulai gunakan sistem

🔗 Link Repository GitHub
✔️ Repository dapat diakses publik:
👉 https://github.com/DaffaAtha03/ujian.git