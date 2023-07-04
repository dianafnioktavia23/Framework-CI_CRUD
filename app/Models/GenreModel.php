<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    //menyambungkan ke dalam tabel film secara langsung
    protected $table ='genre';
    //apabila akan insert di database makan di secara langsung akan memberikan id dengan menlanjutkan id yang sudah ada
    protected $primaryKey ='id_genre';
    //ketika insert menggunakan fungsi ci diakan melakukan autoincremen pada data yg kita tambahkan
    protected $useAutoIncrement = true;
    //mengisinkan apakah data dapat di update, delete dan insert pada kolom
    protected $allowedFields      = ['nama_genre', 'created_at', 'updated_at'];

    /*public function getGenre(){

        $data=[
            [
                "nama_film" => "sewu dino",
                "genre" => "horor" ,
                "duration"=>"1 jam 43 menit"
            ],
            [
                "nama_film" => "Fast and forius",
                "genre" => "action" ,
                "duration"=>"2 jam 9 menit"
            ],
            [
                "nama_film" => "teletabis the movie",
                "genre" => "scient fiction" ,
                "duration"=>"1 jam 9 menit"
            ],
            [
                "nama_film" => "ayah mengapa aku berbeda",
                "genre" => "Drama" ,
                "duration"=>"9 jam 9 menit"
            ],
            [
                "nama_film" => "annabelle",
                "genre" => "Horor" ,
                "duration"=>"2 jam 10 menit"
            ],
            [
                "nama_film" => "coldplay",
                "genre" => "Music" ,
                "duration"=>"5 jam 9 menit"
            ]
        ];

        return $data;
    }*/

    //fungsi untuk menampilkan seluruh data
    public function getAllData(){
        //return mengembalikan data
        return $this -> FindAll();
    }


    public function getDataById($id_genre){
        return $this -> find ($id_genre);
    }

    public function add(){
        $data["semuaGenre"] = $this->Genre->getAllData();
        return view("film/add", $data);
    }

    public function add_genre(){
        $data["semuaGenre"] = $this->Genre->getAllData();
        return view("genre/add_genre", $data);

    }

    public function getGenreAll(){
        $builder = $this->db->table('genre');
        $builder ->select('genre.nama_genre');
        $query = $builder -> get ();
        return $query -> getResult();
    }

    
    


}
