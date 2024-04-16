# NAMA : AHMAD YUSRIL MAULANA.BD
# KELAS : SIB3C
# NIM : 2141762127
# MATA KULIAH : PEMROGRAMAN WEB LANJUT 

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

## Praktikum 2.3 – Retreiving Aggregrates
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/6c049463-1db0-4abe-952a-b88f1772f2b3)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/a339b30a-b72f-4962-a412-f028e4a1882f)

3. Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/4737dbfa-f457-4a06-a790-f0c951503a1a)

4. Laporkan hasil Praktikum-2.3 ini dan commit perubahan pada git.

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/bf7a9429-d50a-4c9f-826a-c77d350ee358)

## Praktikum 2.4 – Retreiving or Creating Models
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/b8127230-8e42-427c-b5c2-e2c4f56c639b)

2. Ubah kembali file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/95f4d922-e2b2-4107-af12-db4ca45c25ba)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan

![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/047051a1-9b75-4d73-9b87-a9765bf2b99b)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d09adc73-2a5d-4d72-8c4c-b4889b2d2003)

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/e7ca6768-6256-4261-bae2-a7bea5817bf8)
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/32f86d8f-47a9-4414-8431-22274ecf76e4)

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/cb7a1afa-42a6-49fe-8de0-d5320878e500)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
program tidak menambahkan database dibawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/a4034be0-4333-4648-b743-cb0a45d8f1e7)

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/1ec2e0b2-9620-4ea4-9ca7-1734cdb9b00e)

9. Simpan kode program Langkah 8. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/c1ba9a32-c79f-48d7-9117-d9a5d4aff2c4)

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/9d901c73-b1e5-4a79-9868-66245c0400a5)

11. Simpan kode program Langkah 9. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/ac29bb92-a108-4a95-b3a9-0d0c691f4cf8)

12. Laporkan hasil Praktikum-2.4 ini dan commit perubahan pada git.
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/b047737e-e98c-4496-89b3-cec3e8f8b949)

## Praktikum 2.5 – Attribute Changes
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/dc61448b-8c64-4c46-80f9-0b544fdefb55)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/58b2d7f8-7049-422f-a97f-1dc50f4f9f85)

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/68959c2f-99e5-4f60-8ea8-864fbcf717c0)

4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/50d5b431-f1c2-4d39-9561-340f0f056b3f)

6. Laporkan hasil Praktikum-2.5 ini dan commit perubahan pada git.
- Perubahan Kode: Pastikan Anda sudah melakukan semua perubahan yang diperlukan pada kode sesuai dengan praktikum yang Anda selesaikan.
- Tambahkan Perubahan ke Staging Area: Gunakan perintah git add . untuk menambahkan semua perubahan yang Anda lakukan ke dalam staging area. Jika Anda hanya ingin menambahkan file tertentu, gantilah . dengan nama file yang ingin ditambahkan.

## Praktikum 2.6 – Create, Read, Update, Delete (CRUD)
1. Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/85be052c-05b7-4ffa-b2b6-b128c88007a9)

2. Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/c1d9d6cc-e8ea-480f-b5eb-339e6fe8fa21)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d3945bc0-d76c-474f-8b35-520f43f03293)

4. Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/5274b718-c064-4896-99b4-092c27d42c9a)

5. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/b91065da-1b0c-42be-aa55-106fd71cc9cc)

6. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah dan diletakan di bawah method index seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/3cdb3856-14de-4e2b-a073-7d88b1b7f719)

7. Simpan kode program Langkah 4 s/d 6. Kemudian jalankan pada browser dan klik link “+ Tambah User” amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/bc1d9a5e-7413-4834-ba53-bda95acc133e)

8. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/2327947a-5127-445c-80af-d0ad71ba8ba5)

9. Tambahkan script pada controller dengan nama file UserController.php. Tambahkanscript dalam class dan buat method baru dengan nama tambah_simpan dan diletakan di
bawah method tambah seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/2811ddb0-7983-4982-b99e-a98cc2d7c3f9)

10. Simpan kode program Langkah 8 dan 9. Kemudian jalankan link localhost:8000/user/tambah atau localhost/PWL_POS/public/user/tambah pada browser dan input formnya dan simpan, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d7189e89-c6fe-45ab-bcde-06b4b00563a8)

11. Langkah berikutnya membuat update atau ubah data user dengan cara bikin file barupada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di
bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/c91d1be9-c795-43af-b0f1-ebcbd2bc51d2)

12. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d0e567ca-acbf-443c-b1b8-168265c31605)

13. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan diletakan di bawah
method tambah_simpan seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/26c823ef-9cc2-4f97-a60e-5a557138bcc8)

14. Simpan kode program Langkah 11 sd 13. Kemudian jalankan pada browser dan klik link “Ubah” amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/7ee18bb9-ed71-4ec2-b07a-d4eac95a8b06)

15. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di
bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d95f4f38-efd7-4dda-b087-2cbeb9f4364e)

16. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah_simpan dan diletakan di
bawah method ubah seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/fa66ad08-f1cb-4ea3-8533-2419061ee37c)

17. Simpan kode program Langkah 15 dan 16. Kemudian jalankan link localhost:8000/user/ubah/1 atau localhost/PWL_POS/public/user/ubah/1 pada
browser dan ubah input formnya dan klik tombol ubah, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/4d8b44a6-5095-4427-9ac7-1e11eb6353ef)

18. Berikut untuk langkah delete . Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/55b75edf-c786-4698-80e7-6d5cc5452d1c)

19. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama hapus dan diletakan di bawah
method ubah_simpan seperti gambar di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/74eb24ea-b349-433c-8c50-50d858e26f24)

20. Simpan kode program Langkah 18 dan 19. Kemudian jalankan pada browser dan klik tombol hapus, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/f26d652f-e880-4aa8-b5a1-4dcd4f2a94e9)

21. Laporkan hasil Praktikum-2.6 ini dan commit perubahan pada git.
- hasil praktikum penambahan fitur Create, Read, Update, dan Delete.

## Praktikum 2.7 – Relationships
1. Buka file model pada UserModel.php dan tambahkan scritpnya menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/79a5563c-cdca-48ee-9135-5ca25044525a)

2. Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/8bf108a0-f5d4-4f6e-be20-42f0bd33772f)

3. Simpan kode program Langkah 2. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/277a687e-aa5d-455a-ba84-fa9727ea382f)

4. Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d8a0ee61-5d88-468c-bfa4-9510cc96cdc0)

5. Buka file view pada user.blade.php dan ubah script menjadi seperti di bawah ini
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/d924d623-1a32-4299-aba0-b0e7c68f18ab)

6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/ahmadyusrilmaulana/pemrograman-web-lanjut/assets/161430084/17d9ca14-3853-4333-8df4-49adc0b7479e)

7. Laporkan hasil Praktikum-2.7 ini dan commit perubahan pada git.
- hasil data relasi level 


