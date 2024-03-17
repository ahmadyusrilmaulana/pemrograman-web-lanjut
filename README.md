### JOBSHEET 04 Model dan Eloquentorm

### PRAKTIKUM 1 $fillable:
1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/1e28bd67-4201-424e-b5f6-20917b0560ef)

2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah ini

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/a64f2041-5d63-4a10-b23c-28bd5c15274a)

3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian
jalankan link localhostPWL_POS/public/user pada browser dan amati apa yang terjadi

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/6ffe1e28-ad88-41ee-b688-9f002824ffad)

5. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian $fillable
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/ca4e5941-b264-42e0-adad-e4c367e55f55)

6. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/0b8cfe95-c10d-454c-b5ea-b9f65fb066dc)

7. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/b601b079-9a4c-45dc-8db6-f9fb4d22ac05)

8. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git.
- Error pada Bagian $fillable:
Kolom Tidak Terdaftar: Pastikan semua kolom yang ingin Anda masukkan secara massal (mass assignment) dalam model telah terdaftar di dalam properti $fillable. Jika kolom yang ingin Anda masukkan tidak terdaftar di sana, Anda akan menerima kesalahan.
- Error pada Bagian Array pada Variabel $data:
Kolom yang Tidak Ada: Pastikan array dalam variabel $data hanya berisi nama kolom yang sesuai dengan nama kolom pada model Anda. Jika ada nama kolom yang tidak sesuai atau tidak ada dalam model, Anda akan menerima kesalahan.

### PRAKTIKUM 2.1 – Retrieving Single Models

1. Buka file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/90a0c3d9-7a35-4b28-bc90-4bab587ddc67)

2. Buka file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/f0e89011-1e62-4615-b20a-7b0a646b8072)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Yang terjadi user dengan id 1 ditampilkan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/89c19ce4-9cba-44ed-bb47-30523f7095b2)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/440d32c2-c449-463a-b130-3fa9a552a3e3)

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
- menampilkan user dengan level id 1

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/998ef584-9ddf-4730-b7ef-6dff811c0ccd)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
menampilkan user dengan level id 1

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/c8cbbcdf-e940-436f-8322-e1ec3a5b2fb1)

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/b0229e30-8894-4732-9747-fe32d0d638b3)

9. Simpan kode program Langkah 8. Kemudian pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Script diatas menampilkan user dengan id 1 yang hanya mengambil kolom username, nama

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/3e95bcda-db4c-4b27-9351-85676cc25adc)

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/18970ea3-1e94-4b7f-b71a-20ca844e79e1)

11. Simpan kode program Langkah 10. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/4a1b9c7d-3f52-477b-916a-2a346ba09819)

12. Laporkan hasil Praktikum-2.1 ini dan commit perubahan pada git.

## Praktikum 2.2 – Not Found Exceptions
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/735e17cb-5661-4c92-8aac-2b694ac0525f)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
- kode diatas adalah perintah untuk mencari user 1 dengan ID 1

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/31ea9680-4895-4286-9a33-df8a8dac55be)

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/7a084a49-6f35-44cc-b140-483057c639d0)

4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/88875b64-cf04-45d7-8b87-31b110666d92)
5. Laporkan hasil Praktikum-2.2 ini dan commit perubahan pada git
- Yang terjadi adalah karena user dengan username ‘manager9’ tidak ditemukan maka google mengembalikan halaman ‘NOT FOUND’
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/88875b64-cf04-45d7-8b87-31b110666d92)
