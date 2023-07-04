# Penggunaan CRUD

## membuat CRUD (Insert ,Upadte, Delete , Alert serta Keamanan URL)
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

## Hasil Praktikum Membuat update

Pada praktikum kali ini yaitu membuat CRUD tentang delete dan update serta keamanan Url pada website aplikasi film yang telah dibuat sebelum nya .berikut merupakan langkah langkah yang harus dilakukan dalam pembuatan program untuk delete,update serta keamanan Url :

1.	Update pada semua film
   
a.	Langkah awal untuk dapat melakukan update pada aplikasi web film ,kita harus dapt mengaktifkan tombol update terlebih dahulu pada tampilan semua film dengan masuk ketampilan view dan masuk pada file index.php dan edit program seperti dibawah
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/cb4bf9e0-b806-4443-90fb-e57f5b7cc186)


b.	Kemudian buatlah method update pada controller film yang menampilkan data film kemudian arahkan pada view dengan file edit.php

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/1663a2f0-d41a-47e2-ac55-82271c4f72d8)


c.	Kemudian buat view dengan nama file edit.php untuk merubah  atau mengedit data nya 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/01f084c6-7c0a-43d0-94e6-3ef83f08489d)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/b7992cb1-9000-4210-9f12-f4b2ebdf3119)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/7ef4016c-7840-4ca6-8973-bc7ace492fcf)


d.	Kemudian jangan lupa untuk memasukkan method yang mengubah arah nya post nya 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/157b0ffb-51f3-4881-8b18-a54768c1dab1)



e.	Setelah itu buat method edit pada controller film 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/ecf6b9b8-93a2-4f3f-bfeb-9cefeedb233b)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/78b9e5a7-3faf-4417-9e1e-4f93cceea3f7)



f.	Maka output yang dihasilkan adalah

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/28b44de2-2b11-45ff-9322-a075ec8a237e)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/89fde4fe-eb2b-446b-94f1-ea6a115071bd)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/15ae3e4d-1d3f-4ea9-ac2a-375952e2c1f9)

 
2.	Update pada Genre
a.	Langkah awal sama saja seperti update pada film ,disini aktifkan terlebih dahulu button pada update pada semuaGenre.php

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/1c8271e7-6579-4932-a929-32e4950b5769)

 
b.	Kemudian membuat methode pada controller pada genre yang menampilkan data genre

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/2961532c-d0aa-4b40-8ad3-bcbcc1bfc3ae)

 
c.	Setelah itu buatlah folder genre pada view dan buat file edit_genre didalam folder tersebut untuk dapat menampilkan data yang akan diupdate

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/6bb8c474-15d3-4f3a-b4e9-c0f266187a5e)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/c5093aa9-d91f-436e-8af0-63b8158fc571)


d.	Kemudian jangan lupa untuk memasukkan method yang mengubah arah post nya 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/72ed7c22-5ca7-407a-a1ea-c58d8b9c7041)

 

e.	Kemudian buatlah sebuah methode edit_genre pada controller untuk membaca data yang akan diedit 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/149c9ed9-6266-4adc-98ea-adfc4717843a)


f.	Maka output yang dihasilkan ialah 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/7c2d6d77-37bf-4b35-8772-ccd639767258)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/a6a6dc1f-e620-4804-a606-83ad461cb1f3)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/df2f7dab-0a6d-4108-ad61-d8a7c67a10e2)


## Hasil Praktikum Membuat Delete

3.	Delete pada Film
   
a.	Ubah kembali index.php pada bagian button update dan delete.pada bagian delete tambahkan onclick untuk mengkonfirmasi atau mereturn function confirmdelete.

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/b5105556-1b1d-4c45-a3f4-f94af6652659)

 
b.	Kemudian tambahkan method confirmdelete dibawah setelah tutup div dan sebelum endsection

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/3f15d9b9-d16c-40f6-812a-b72ef2e8c49a)


c.	Kemudian membuat method destory pada controller dengan menerima parameter id

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/cf0119fc-d9e4-48fe-9062-465e15af0c0c)


d.	Kemudian output yang dihasilkan ialah 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/354aad2c-f190-41b9-b19a-d473fb3a0005)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/52151178-1aab-464d-b79c-9e75321652b1)


4.	Delete pada Genre
a.	Pada tahap awal aktifkan onclick button delete untuk mengkonfirmasi atau mereturn function confirmdelete.

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/30090f8f-10b0-41c8-a635-ab713aaccb55)


b.	Kemudian tambahkan method confirmdelete  difile semuaGenre.php yang diletakkan dibawah setelah tutup div dan sebelum endsection

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/111572bf-d404-4177-baac-ca8df02aeeaf)

 
c.	Kemudian membuat method hapus pada controller Genre dengan menerima parameter id 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/f5f80b45-1a8f-451d-a4ac-2c0f7c651abd)

 
d.	Kemudian lihat outup yang dihasilkan seperti dibawah ini

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/ed713c44-357d-4e6d-89c2-ae06c8330a2c)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/a9f9cada-eb22-4d3f-875c-1e493fe26291)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/f8b767b9-d7d0-45ce-bddd-6fd92a2cfeae)


## Hasil Praktikum Membuat Keamanan URL

Keamanan url yang akan dibuat berfungsikan untuk memanipulasi id parameter yang akan terlihat pada url diatas pada bagian masing masing pada edit baik itu di semua film maupun di genre.keamanan url ini akan menggantikan id menjadi rendom string yang akan tampil pada url web tersebut.langkah-langkah dalam melakukan keamana url adalah sebagai berikut :

a.	Langkah awal untuk mengamankan url ,buatlah file dengan nama url_helper.php dan letakkan file tersebut di folder helper dan masukkan perintah seperti dibawah ini

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/b3b3568b-2d85-4e29-b880-78a401b64a96)

 
b.	Kemudian setelah itu jangan lupa ubah program pada bagian link href pada edit /update yang berada pada file semuaFilm.php

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/5262a967-2601-47c9-a901-aa3713734f08)


c.	Kemudian ubah juga program pada bagian deleteconfirm agar id dalam di manipulasi menjadi rendom string 

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/ee481b3d-196f-43c5-8825-5e4d888ad63f)

 
d.	Kemudian ubah juga pada bagian method yang berada pada controller update untuk memanipulasi id parameter nya

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/63253b4c-874c-4071-a713-8d8078f902bc)

 
e.	Kemudian ubah pula bagian delete pada bagian controller dengan nama destory.php

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/b5933d1e-165b-44db-8507-386088f6b3db)

 
f.	Maka output yang dihasilkan ialah untuk id tidak lagi terlihat id url web dan tergantikkan dengan string rendom seperti dibawah ini

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/b8164600-8611-438d-a84d-b0208112f8ed)
![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/7e743468-329c-471c-b5d8-51b8a58ecc62)

![image](https://github.com/dianafnioktavia23/Framework-CI_CRUD/assets/113124849/22c414a8-7d25-48dd-9aa6-8366f22ebe7a)



 
 




 
 
 






 
 
 





