# Penggunaan CRUD

## membuat Insert dan alert
## Bahan dan Alat yang digunakan
1.	Web Editor : Visual Studio Code
2.	Web Browser : Google Chrome
3.	OS PC : Windows 10
4.	XAMPP : versi 7.2
5.	CodeIgniter : 4.1.1
6.	Snipping Tool

## Hasil Praktikum Membuat Insert
Pada praktikum kali ini yaitu membuat insert yang masuk kedatabase pada sebuah aplikasi film yang telah dibuat sebelum nya .berikuut merupakan langkah langkah yang harus dilakukan dalam pembuatan insert yang masuk kedalam database:
1.	Membuat tampilan tambahkan data di pojok atas sebelah kanan untuk masuk kedalam database atau form baru.dengan menggunakan perintah berikut
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/27b06333-e220-4bb3-b650-7e4a64ce094c)

 
Kemudian akan muncul tampilan sebagai berikut 
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/d412adbd-8a58-4ddb-9734-3c3053ff6379)



2.	Kemudian pada saat ingin masuk kedalam halaman tambahkan data untuk menambahkan data gunakan perintah berikut untuk dapat menggunakan icon tambahakan data tersebut .dengan membuat file baru yaitu add.php di folder view .dan untuk memanggil nya masuk perintah berikut untuk dapat memanggilnya
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/9c861cd3-b4d1-4769-aac9-e7bc24c1b05a)

 
Maka output yang dihasilkan adalah 
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/152cc187-f692-4bdb-ac97-7f42e350f3b6)


 
3.	Kemudian buatlah file add.php didalam view untuk membuat isi dari sebuah controller yang telah dibuat.dan hubungkan juga ke dalam layout yang telah dibuat.
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/05d99826-4638-4431-92d9-751f2404af9b)

 
4. 	Kemudian tambahkan html untuk isi pada sebuah tampilan view untuk menambahkan sebuah data yang akan dibuat.
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/32d11901-aaa4-4ce6-9db9-5e89346fc658)


5. 	Kemudian masukkan perintah html form untuk tabel yang berfungsikan sebagai tempat menambahkan sebuah data yang akan dimasukkan
   
  ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/8c8e4db6-d471-4662-bdcb-5c78295873c1)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/3e072829-99ab-4180-93ed-259876b5cc28)

 
Maka output yang dihasilkan dalam tampilan adalah sebagai berikut :
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/355fd4b9-d072-470b-9147-03199ab60f63)

 
6.	Kemudian kita akan membetulkan di bagian film agar terhubung pada  tabel genre dapat terlihat ditampilan pilihan pada saat akan memasukan genre pada saat menambh data
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/d5df6ace-69d6-404b-869f-1b6043663459)

7.	Setelah tambhakan method add untuk menghubungkan antara model dengan genre
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/4d5346d1-c40a-4c0f-a651-49dfa226f1cc)

 
8.	Kemudian masukkan perintah select pada codingan untuk menampilkan data genre pada option genre.
   ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/e99bc265-f273-41f7-abfe-696f2de190da)

 
Maka output yang dihasilkan dari codingan diatas yaittu :
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/ae9d653f-e880-4b6e-8d4c-d48dee2b5c1b)

 
9. Kemudian masuk pada controller dan buat file method dengan nama store dengan fungsi untuk menambahkan sebuah cover dan menggunkan method getpost pada url yang digunakan serta menggunakan redirect untuk masuk kedalam halaman film , dan masukkan perintah berikut :
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/18b0a7d8-9762-4e75-a1d9-881641285d67)

 
10.	Maka ketika kita memasukkan sebuah data akan masuk kedlam database dan akan tampil pada menu tampilan semua film .sama seperti output yang dihasilkan berikut :
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/ece7c3d0-d878-400d-ba91-dd0250ef5533)

  

11. Kemudian kita akan membuat validation agar aplikasi yang kita buat sesuai dengan mengikuti alur yang baik dan benar , maka dari itu dibuatlah validation .dengan cara menambhakan file validation pada file add.php kemudian edit pada menggunakan boostrap invallid pada file tersebut.
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/b9506a61-13f7-43c4-94b2-eb64ed2d3465)

 
12. Kemudian edit pada bagian controller untuk ditambhakan variabel error yang diambil dari session pada add.php
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/55e890e1-015a-4b7f-9e18-28b89c1311fc)

 
13. Kemudian edit pada bagian methode store agar sesuai dengan validation yang digunakan
     
 ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/3a78d532-a583-482c-abf9-1b177f1fa1a3)

 ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/362074fd-78a2-4698-b71e-b24f4c35cc9d)


Output yang dihasilkan adalah sebagai berikut 
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/df9b29c7-e39b-4fed-9c73-a6d912c1464c)

 
14.	Kemudia membuat sebuah tampilan agar menarik saat menyimpan sebuah data yaitu dengan meggunakan sweet alert .pertma install atau unduh terlebih dahulu sweet alert yang akan digunakan di situs
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/c8a0956a-935b-4f78-befc-6d6b652044e1)

Kemudian unduh dan simpan didalam public digabung dengan bagian js 
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/5e78b219-8f6a-4c5f-98f6-72afeacdd559)

 
15.	Kemudian tambhkan script yang di letakkan pada layout yang digunakan untuk tampilan navbar
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/da28f895-c8de-4adc-bd71-73e8fe121f51)


16. Kemudian yang terakhir yaitu ubah pada bagian file dalam controller untuk validasi sebelum redirect pada halaman semua film dan tambhakan set session pada method store
    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/989d0492-02a8-406d-b333-beca1577f663)

    ![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/7f1be01a-e1de-4757-abf6-2924e0b66451)


Output yang dihasilkan ialah :

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/bb0411c7-0cf7-4fa9-959d-40048ca22dde)



