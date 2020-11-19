# Assignment 3 - Interaksi Manusia dan Komputer

## Team E
1. Muhammad Ardani              (1313618014)
2. Muhammad Asyraf Amanullah    (1313618010)
3. Ridwan Syah                  (1313618016)

<h1 align="center">SIPERA</h1>
<p align="center">Sistem Informasi Peminjaman Peralatan dan Ruangan</p>

<p align="center"> 
    <img src="logo.png" align="center" width="150"></img>
</p>

<h1 align="center"> Sistem Informasi </br> Peminjaman Peralatan dan Ruangan </h1>


# Permasalahan
SIPERA adalah sistem informasi berbasis website yang diperuntukan untuk penanggung jawab mata kuliah dalam peminjaman peralatan dan ruangan khususnya rumpun matematika.
Tujuan dibuatnya SIPERA adalah untuk memudahkan penanggung jawab kelas dalam mengecek ruangan yang kosong ketika ingin meminjam sebuah ruangan untuk kelas pengganti. SIPERA juga bertujuan membantu penanggung jawab kelas dalam meminjam sebuah ruangan ketika adanya kelas pengganti. Selain itu, SIPERA juga bisa mengecek dan meminjam sebuah peralatan ketika dalam kelas membutuhkan sebuah peralatan seperti; alat tulis, proyektor, LCD, kabel HDMI, stop kontak dll

# Fitur

### User
- Login <br> Pada fitur ini apabila user lupa akan password yang diberikan, maka user dapat merequest kembali password yang telah ada kepada admin. Hanya memasukkan NRM dan email, password terbaru akan dikirim ke email yang terdaftar.
- Peminjaman Ruangan <br> Pada fitur ini user dapat melihat seluruh ruangan yang ada pada lantai 5 dan lantai 6 GDS serta dapat memesan ruangan apabila ruangan tersebut kosong, tidak terdapat kegiatan belajar-mengajar sebelumnya.
- Peminjaman Barang <br> Pada fitur ini user dapat melihat barang apa saja yang dapat dipinjam dan barang apa saja yang saat ini tersedia. User juga dapat memesan untuk meminjam barang tersebut apabila tersedia.

### Admin
- CRUD Barang <br> Pada fitur ini admin diberikan akses untuk menambahkan barang yang dapat dipinjam dan tersedia, melihat barang yang tersedia, memperbarui stok barang yang tersedia, dan menghapus barang yang dapat dipinjam.
- CRUD Ruangan <br> Pada fitur ini admin diberikan akses untuk menambahkan ruangan yang dapat dipinjam dan tersedia, melihat ruangan yang tersedia, memperbarui waktu digunakannya ruangan, dam menghapus ruangan yang terdaftar pada sistem.
- CRUD User <br> Pada fitur ini admin dapat menambahkan jumlah user/mahasiwa, melihat informasi user/mahasiswa, memperbarui data user/mahasiswa, dan menghapus user/mahasiswa.
- CRUD Transaksi Ruangan dan Barang <br> Pada fitur ini admin diberikan akses untuk menambahkan sendiri pemesanan ruangan/barang, melihat informasi pemesanan ruangan termasuk dosen dan mata kuliah yang dijalankan, menyetujui atau menolak untuk meminjamkan ruangan/barang, dan menghapus transaki pesanan yang terdapat pada sistem.

# Use Case

![Use Case Diagram](docs/Diagram/sipera.png)

# Home Page
## User
![User](docs/Mock-Up/User/homepage.png)
## Admin
![User](docs/Mock-Up/Admin/dashboard.png)

# Design Control
## User
![User](docs/Diagram/design-control-user.png)

## Admin
![Admin](docs/Diagram/design-control-admin.png)

# Mockup Design
[Design](docs/Mock-Up)

