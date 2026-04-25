# Log Pengembangan Rent Office

Dokumen ini mencatat langkah-langkah pengembangan, perubahan struktur, dan penambahan fitur pada aplikasi Rent Office.

## Riwayat Aktivitas

| Tanggal | Aktivitas | Deskripsi | Status |
| :--- | :--- | :--- | :--- |
| 2026-04-25 | Inisialisasi Project | Instalasi Laravel menggunakan Docker Composer. | Selesai |
| 2026-04-25 | Konfigurasi Docker | Setup Dockerfile (PHP 8.4) dan docker-compose.yml (MySQL, phpMyAdmin) mengikuti pola de_roemah_makan. | Selesai |
| 2026-04-25 | Perancangan Database | Melengkapi struktur kolom pada semua migrasi sesuai ERD. | Selesai |
| 2026-04-25 | Migrasi Database | Eksekusi php artisan migrate di dalam container app. | Selesai |

## Daftar Entitas Database

1. City: Mengelola data kota lokasi kantor.
2. OfficeSpace: Mengelola data detail ruang kantor.
3. OfficeSpacePhotos: Mengelola galeri foto ruang kantor.
4. OfficeSpaceBenefits: Mengelola data fasilitas/benefit ruang kantor.
5. BookingTransaction: Mengelola data transaksi pemesanan.

## Rencana Pengembangan (TODO)

- [x] Melengkapi struktur kolom pada setiap file migrasi sesuai ERD.
- [ ] Menentukan relasi antar Model (Eloquent Relationships).
- [x] Eksekusi migrasi database (php artisan migrate).
- [ ] Pembuatan Seeder untuk data awal (City & OfficeSpace).
- [ ] Implementasi sistem autentikasi dan Filament PHP (jika diperlukan).

---
Dokumen ini akan diperbarui secara berkala setiap kali terdapat perubahan signifikan pada project.
