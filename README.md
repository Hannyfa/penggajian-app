Buka terminal atau command prompt di komputer Anda.
Gunakan perintah git clone untuk mengkloning repository Laravel dari GitHub ke komputer Anda.
git clone https://github.com/username/nama-repository.git
Ganti https://github.com/username/nama-repository.git dengan URL repository GitHub Anda.

Masuk ke direktori proyek Laravel yang baru saja Anda kloning.
cd nama-repository
Instal semua dependencies PHP menggunakan Composer.
composer install

Salin file .env.example menjadi .env.
cp .env.example .env
Buat kunci aplikasi Laravel.
php artisan key:generate

Sebelumnya buatlah database baru di localhost, nama database disesuaikan dengan yang ada di .env
Kemudian jalankan migrasi untuk membuat struktur database.
php artisan migrate

Gunakan perintah php artisan serve untuk menjalankan server pengembangan Laravel secara lokal.
php artisan serve
Aplikasi Laravel Anda sekarang berjalan dan dapat diakses di http://localhost:8000 di browser Anda.

Anda bisa melakukan registrasi terlebih dahulu kemudian login
Di halaman Karyawan bisa tambah, edit, hapus, melihat detail karyawan dan mendownload laporan gaji karyawan yang berbentuk PDF
Sedangkan di halaman gaji bisa tambah, edit, hapus, melihat detail gaji dan menghitung gaji.
