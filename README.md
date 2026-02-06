# WHF Fitness - Supplement & Personal Trainer Marketplace

**Will Healthy Fitness (WHF)** adalah platform e-commerce modern yang berfokus pada penjualan suplemen gym berkualitas tinggi dan penyediaan jasa Personal Trainer profesional. Dibangun menggunakan framework **CodeIgniter 4** dan **DaisyUI (Tailwind CSS)** untuk memberikan pengalaman pengguna yang cepat, responsif, dan premium.

## 🚀 Fitur Utama

- **Marketplace Suplemen**: Pembelian produk berdasarkan kategori, sub-kategori, dan brand.
- **Booking Personal Trainer**: Cari dan pesan trainer profesional berdasarkan lokasi, pengalaman, dan rating.
- **Sistem Multi-Role**:
  - **Admin**: Manajemen data master, kategori, brand, dan verifikasi.
  - **Supplier**: Kelola stok produk dan pantau pesanan masuk.
  - **Trainer**: Kelola profil, paket latihan, dan jadwal booking.
  - **Customer**: Belanja, booking trainer, dan kelola profil pribadi.
- **Integrasi Pembayaran DOKU**: Sistem pembayaran otomatis menggunakan Virtual Account, E-Wallet, dan Kartu Kredit.
- **Sistem Ulasan (Reviews)**: Customer dapat memberikan ulasan dan rating untuk produk maupun trainer setelah transaksi selesai.
- **Dashboard Statistik**: Statistik dinamis untuk tiap role guna memantau aktivitas bisnis.
- **Blog & FAQ**: Informasi kebugaran dan bantuan bantuan layanan.

## 🛠️ Tech Stack

- **Backend**: PHP 8.1+ (CodeIgniter 4)
- **Database**: MySQL / MariaDB
- **Frontend**: Tailwind CSS v4, DaisyUI v5 (Glassmorphism design)
- **Payment Gateway**: DOKU API
- **Tools**: Composer, NodeJS (Tailwind CLI)

## 📦 Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project di lingkungan lokal:

### 1. Prasyarat

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- NodeJS (Opsional, untuk kustomisasi CSS)

### 2. Clone Repository

```bash
git clone https://github.com/username/whf-fitness.git
cd whf
```

### 3. Install Dependensi

```bash
composer install
npm install
```

### 4. Konfigurasi Environment

Salin file `.env.example` (atau `env`) menjadi `.env` dan sesuaikan pengaturannya:

```ini
database.default.hostname = localhost
database.default.database = db_whf
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

app.baseURL = 'http://localhost:8080/'
```

### 5. Setup Database

1. Buat database baru bernama `db_whf`.
2. Import file SQL `db_whf.sql` yang ada di root project ke database tersebut.

### 6. Menjalankan Aplikasi

Gunakan perintah berikut untuk menjalankan server development dan Tailwind watch secara bersamaan:

```bash
npm start
```

Aplikasi dapat diakses di `http://localhost:8080`.

## 👥 Akun Demo (Default)

Tersedia beberapa akun untuk pengujian (password default biasanya disesuaikan di database):

| Role         | Username / Email                |
| :----------- | :------------------------------ |
| **Admin**    | `admin`                         |
| **Supplier** | `supplier` / `evolene`          |
| **Trainer**  | `trainer` / `coach.adi`         |
| **Customer** | `customer` / `user@example.com` |

## 🛡️ Keamanan & Lisensi

Pastikan file `.env` dan folder `writable/` memiliki izin yang sesuai. File sensitif seperti `db_whf.sql` sebaiknya dihapus atau dipindahkan dari folder public sebelum di-deploy ke production.

---

Dikembangkan dengan ❤️ oleh **Will Healthy Fitness Team**.
