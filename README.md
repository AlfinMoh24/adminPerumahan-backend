# Backend Aplikasi Administrasi Perumahan

## Deskripsi Proyek
Aplikasi ini merupakan backend untuk sistem administrasi perumahan yang menangani data penghuni, rumah, pembayaran, pengeluaran, dan pemasukan. API ini dibangun menggunakan **Laravel** dan menyediakan endpoint untuk CRUD (Create, Read, Update, Delete) serta beberapa fitur otomatis seperti pencatatan riwayat penghuni rumah dan pencatatan pemasukan dari pembayaran.

## Fitur Utama
- **Manajemen Penghuni**: Tambah, edit, hapus, dan melihat detail penghuni.
- **Manajemen Rumah**: Menyediakan informasi rumah beserta statusnya.
- **Riwayat Penghuni**: Mencatat kapan penghuni masuk dan keluar dari rumah tertentu.
- **Pembayaran**: Pengelolaan pembayaran dengan status otomatis.
- **Pemasukan & Pengeluaran**: Otomatis mencatat pemasukan dari pembayaran dan memungkinkan pencatatan pengeluaran.

## Teknologi yang Digunakan
- **Laravel** - Framework backend
- **MySQL** - Database
- **Postman** - Pengujian API

## Instalasi dan Konfigurasi
### 1. Clone Repository
```bash
    git clone https://github.com/username/repository.git
    cd repository
```
### 2. Install Dependency
```bash
    composer install
```
### 3. Buat file konfigurasi environment
```bash
    cp .env.example .env
```
Edit file `.env` sesuai dengan konfigurasi database dan aplikasi.

### 4. Generate Key
```bash
    php artisan key:generate
```
### 5. Migrasi Database dan Seeder
```bash
    php artisan migrate --seed
```
### 6. Jalankan Server Lokal
```bash
    php artisan serve
```
Akses API di `http://127.0.0.1:8000`

## Endpoint API
Berikut beberapa endpoint utama:

### Penghuni
| Method | Endpoint | Deskripsi |
|--------|-------------|-------------|
| GET | `/api/penghuni` | Menampilkan semua penghuni |
| GET | `/api/penghuni/{id}` | Menampilkan detail penghuni berdasarkan ID |
| POST | `/api/penghuni` | Menambahkan penghuni baru |
| PUT | `/api/penghuni/{id}` | Mengupdate data penghuni |
| DELETE | `/api/penghuni/{id}` | Menghapus penghuni |

### Rumah
| Method | Endpoint | Deskripsi |
|--------|-------------|-------------|
| GET | `/api/rumah` | Menampilkan daftar rumah |
| GET | `/api/rumah/{id}` | Menampilkan detail rumah berdasarkan ID |
| POST | `/api/rumah` | Menambahkan rumah baru |
| PUT | `/api/rumah/{id}` | Mengupdate data rumah |
| DELETE | `/api/rumah/{id}` | Menghapus rumah |

### Pembayaran
| Method | Endpoint | Deskripsi |
|--------|-------------|-------------|
| GET | `/api/pembayaran` | Menampilkan semua pembayaran |
| GET | `/api/pembayaran/{id_rumah}` | Menampilkan pembayaran berdasarkan rumah |
| POST | `/api/pembayaran` | Menambahkan pembayaran baru |
| PUT | `/api/pembayaran/{id}` | Mengubah status pembayaran |

### Pemasukan & Pengeluaran
| Method | Endpoint | Deskripsi |
|--------|-------------|-------------|
| GET | `/api/pemasukan` | Menampilkan semua pemasukan |
| POST | `/api/pemasukan` | Menambahkan pemasukan |
| GET | `/api/pengeluaran` | Menampilkan semua pengeluaran |
| POST | `/api/pengeluaran` | Menambahkan pengeluaran |

