# Changelog

Daftar perubahan signifikan pada project Rent Office.

## [Unreleased]

### Added
- Inisialisasi project Laravel menggunakan Docker Composer.
- Konfigurasi Dockerfile menggunakan PHP 8.4-FPM base dengan eksekusi artisan serve.
- Setup docker-compose.yml untuk service app, db (MySQL 8), dan phpmyadmin.
- Penyesuaian nama container: rentoffice_app, rentoffice_db, rentoffice_phpmyadmin.
- Konfigurasi port mapping: App (8000), phpMyAdmin (8081).
- Sinkronisasi konfigurasi .env dengan standar project de_roemah_makan.
- Pembuatan Model, Migration, dan Controller untuk City, OfficeSpace, OfficeSpacePhotos, OfficeSpaceBenefits, dan BookingTransaction dengan struktur kolom lengkap sesuai ERD.
- Eksekusi migrasi database awal (Schema Build).
- Inisialisasi Git repository dan First Commit.

---
Format dokumen ini mengikuti standar Keep a Changelog.
