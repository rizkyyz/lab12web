# Lab11Web 
framework CRUD PHP code igniter

###### Nama : Muhamad Rizky Abdillah
###### NIM : 312010386
###### Kelas : TI.A.2

Instruksi Praktikum

1. Persiapkan text editor misalnya VSCode.

2. Buka kembali folder dengan nama lab11_php_ci pada docroot webserver (htdocs)

3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

Langkah-langkah Praktikum

Persiapan.

Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah 
database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan 
melalui XAMPP.

#### Membuat Database & Tabel

![](img/1%20satu.jpg)



#### Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. 
Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![](img/2%20dua.jpg)

#### Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada 
direktori app/Models dengan nama ArtikelModel.php

![](img/3a%20view.jpg)



#### Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers. 

![](img/3b%20controller.jpg)


#### Membuat View
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file 
baru dengan nama index.php. 

![](img/3c%20view.jpg)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikeL

![](img/4%20empat.jpg)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada 
database agar dapat ditampilkan datanya.

![](img/5%20lima.jpg)

![](img/6%20enam.jpg)

Refresh kembali browser, sehingga akan ditampilkan hasilnya.


![](img/7%20right.jpg)


#### Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. 
Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![](img/8a%20detailcontroller.jpg)


#### Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php

![](img/8b%20detailview.jpg)


#### Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel 
detail.

![](img/8c%20detailroutes.jpg)

![](img/8d%20delapan.jpg)

#### Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada 
Controller Artikel dengan nama admin_index(). 

![](img/9%20controlleradmin.jpg)


Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![](img/9%20view.jpg)
![](img/9%20view2.jpg)

Tambahkan routing untuk menu admin seperti berikut:

![](img/9%20routes.jpg)


Akses menu admin dengan url http://localhost:8080/admin/artikel

![](img/admin%20css.jpg)


#### Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add()

![](img/10%20controller.jpg)


Kemudian buat view untuk form tambah dengan nama form_add.php

![](img/10%20view.jpg)

hasil 

![](img/10%20xadminadd.jpg)

#### Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit(). 

![](img/11%20edit1controller.jpg)


Kemudian buat view untuk form tambah dengan nama form_edit.php

![](img/11%20edit2view.jpg)

hasil : 

![](img/11%20edit3.jpg)


#### Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![](img/12%20hapus.jpg)

Hasil :

![](img/12%20hapus1.jpg)

## Pertanyaan dan Tugas

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan 
improvisasi.

#### Laporan Praktikum

1. Melanjutkan praktikum sebelumnya pada repository dengan nama Lab11Web.
2. Kerjakan semua latihan yang diberikan sesuai urutannya.
3. Screenshot setiap perubahannya.
4. Update file README.md dan tuliskan penjelasan dari setiap langkah praktikum 
beserta screenshotnya.
5. Commit hasilnya pada repository masing-masing.
6. Kirim URL repository pada e-learning ecampus
