# Pemesanan Taxi Online

Website sederhana untuk pemesanan Taxi Online menggunakan PHP, HTML, CSS, dan JavaScript.

## Instruksi Kerja

### 1. Data Jenis Kendaraan
Variabel `$kendaraan` berisi data jenis kendaraan yang dipesan dalam bentuk array satu dimensi.

### 2. Mengurutkan Array Kendaraan
Mengurutkan array `$kendaraan` secara ascending.

### 3. Dropdown Pilihan Jenis Kendaraan
Menampilkan dropdown pilihan jenis kendaraan berdasarkan data pada array `$kendaraan` menggunakan perulangan.

### 4. Menghubungkan dengan CSS
Menghubungkan dengan library/berkas CSS.

### 5. Menampilkan Logo Taxi Online
Menampilkan logo Taxi Online pada halaman.

### 6. Fungsi `hitung_sewa`
Menambahkan baris komentar yang relevan pada fungsi `hitung_sewa()`.

### 7. Menyimpan Jarak Tempuh
Menyimpan jarak yang telah dimasukkan oleh pengguna dalam variabel `$jarak_tempuh`.

### 8. Biaya Platform dan Sewa per Kilometer
Menggunakan percabangan untuk menentukan biaya platform dan biaya sewa per kilometer. Menyimpan biaya dalam variabel `$biaya_platform` dan `$sewa_per_km`.

### 9. Menghitung Biaya Sewa
Menggunakan fungsi `hitung_sewa` untuk menghitung biaya sewa dan menyimpan hasil dalam variabel `$biaya_sewa`.

### 10. Menyimpan Data Pemesanan
Menyimpan data pemesanan ke dalam file JSON.


## Cara Penggunaan

1. **Clone repositori ini ke komputer Anda**:
    ```bash
    git clone https://github.com/arjunnourmansyah27/Taxi-online.git
    ```
2. **Buka folder proyek**:
    ```bash
    cd Pemesanan-Taxi-Online
    ```
3. **Pastikan Anda memiliki server lokal yang mendukung PHP**. Anda dapat menggunakan software seperti XAMPP atau MAMP.
4. **Pindahkan proyek ke direktori root server lokal Anda**. Untuk XAMPP, biasanya direktori root adalah `htdocs`. Untuk MAMP, direktori root biasanya adalah `htdocs` atau `Sites`.
5. **Jalankan server lokal**. Buka XAMPP atau MAMP, lalu start module Apache.
6. **Akses proyek melalui peramban**. Buka peramban dan masukkan URL berikut:
    ```
    http://localhost/Pemesanan-Taxi-Online/index.php
    ```
7. **Gunakan form pemesanan**. Masukkan data pemesanan Anda dan klik tombol "Pesan" untuk melihat hasilnya.
