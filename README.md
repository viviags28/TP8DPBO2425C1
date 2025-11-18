# Janji
Saya Vivi Agustina Suryana dengan NIM 2400456 mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek Untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.

# Deskripsi Program
Aplikasi web untuk mengelola data dosen dan department menggunakan arsitektur Model-View-Controller (MVC). Aplikasi ini menyediakan fungsi CRUD (Create, Read, Update, Delete) untuk kedua entitas tersebut.

## Desain Program

### Arsitektur MVC

#### 1. Model
- Menangani logika data dan komunikasi dengan database
- Terdiri dari class DB (koneksi database), Department, dan Lecturer
- Bertanggung jawab untuk semua operasi database

#### 2. View
- Menampilkan antarmuka pengguna
- Terpisah berdasarkan modul (departments dan lecturers)
- Menggunakan template system dengan header dan footer

#### 3. Controller
- Menangani logika aplikasi dan request dari user
- DepartmentController untuk mengelola department
- LecturerController untuk mengelola dosen
- Menghubungkan Model dan View

## Struktur Folder
```
tp_mvc25/
├── config/           # Konfigurasi aplikasi
├── models/           # Model data (DB, Department, Lecturer)
├── views/           # Template dan tampilan
│   ├── templates/   # Layout umum (header, footer)
│   ├── departments/ # Tampilan untuk department
│   └── lecturers/   # Tampilan untuk dosen
├── controllers/     # Controller (DepartmentController, LecturerController)
└── index.php        # Router utama
```

## Alur Kerja

### 1. Routing
- Router utama (index.php) menerima request
- Membaca parameter controller dan action dari URL
- Memuat controller yang sesuai dan menjalankan method

### 2. Flow Data
```
User Request → Router → Controller → Model → Database
                                     ↓
User Response ← View ← Controller ← Model
```

### 3. Contoh Alur
- User mengakses halaman dosen
- Router memanggil LecturerController::index()
- Controller meminta data dari Model Lecturer
- Model mengambil data dari database
- Controller mengirim data ke View
- View menampilkan data dalam format HTML

## Struktur Database
Database terdiri dari dua tabel utama:

1. **departments**: Menyimpan data jurusan
2. **lecturers**: Menyimpan data dosen dengan relasi ke departments

## Fitur yang Tersedia

### Untuk Department:
- Melihat daftar department
- Menambah department baru
- Mengedit data department
- Menghapus department

### Untuk Dosen:
- Melihat daftar dosen
- Menambah dosen baru
- Mengedit data dosen
- Menghapus dosen
- Relasi dengan department

## Dokumentasi

### Tampilan Awal Department

<img width="1366" height="768" alt="1  Tampilan Departement" src="https://github.com/user-attachments/assets/42249619-b630-47f2-8c4d-d516388aea6a" />


### Tampilan Awal Dosen  

<img width="1366" height="768" alt="2  Tampilan Dosen" src="https://github.com/user-attachments/assets/a5df9464-95e5-41b3-ba1d-cd4963cbb68d" />


### Full Test CRUD

https://github.com/user-attachments/assets/9c2dc503-8ee9-4384-b62b-8adb734faaf8





