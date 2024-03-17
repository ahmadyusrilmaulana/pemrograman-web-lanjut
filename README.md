### JOBSHEET 04 Model dan Eloquentorm

### PRAKTIKUM 1 
## 1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/1e28bd67-4201-424e-b5f6-20917b0560ef)
## 2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/a64f2041-5d63-4a10-b23c-28bd5c15274a)
## 3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhostPWL_POS/public/user pada browser dan amati apa yang terjadi
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/6ffe1e28-ad88-41ee-b688-9f002824ffad)
## 4. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian $fillable
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/ca4e5941-b264-42e0-adad-e4c367e55f55)
## 5. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/0b8cfe95-c10d-454c-b5ea-b9f65fb066dc)
## 6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/b601b079-9a4c-45dc-8db6-f9fb4d22ac05)
## 7. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git.
1. Error pada Bagian $fillable:
Kolom Tidak Terdaftar: Pastikan semua kolom yang ingin Anda masukkan secara massal (mass assignment) dalam model telah terdaftar di dalam properti $fillable. Jika kolom yang ingin Anda masukkan tidak terdaftar di sana, Anda akan menerima kesalahan.
2. Error pada Bagian Array pada Variabel $data:
Kolom yang Tidak Ada: Pastikan array dalam variabel $data hanya berisi nama kolom yang sesuai dengan nama kolom pada model Anda. Jika ada nama kolom yang tidak sesuai atau tidak ada dalam model, Anda akan menerima kesalahan.
