<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;
use App\Models\GenreModel;

class Film extends BaseController
{
    //step 2
    protected $Film;
    protected $Genre;
    //step 3 membuat fungsi construct untuk inisiasi class model(filmmodel)
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Film = new FilmModel();
        $this -> genre = new GenreModel();
    }

    public function index()
    {
        //step 4
        $data['data_film'] = $this -> Film -> getAllDataJoin();
        return view("film/index", $data);
    }

    //fungsi yang akan diakses pada url nanti
    public function all(){
        //memanggil fungsi get all data pada model
        //dd($this->Film -> getAllData()); 
    $data['semuaFilm'] = $this -> Film -> getAllDataJoin();
    return view("Film/semuaFilm", $data);    
    }  
    
    public function add(){
        $data['genre'] = $this -> genre -> getAllData();
        $data["errors"] = session('errors');
        return view("Film/add", $data);
    }

    public function store(){
        $validation =$this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom Nama Film Harus Diisi'
                ]
            ],
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom Genre Harus Diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom Durasi Harus Diisi'
                ]
            ],
            'cover' => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,img/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded'=> 'kolom Cover harus Berisi File.',
                    'mime_in' => 'Tipe file pada kolom cover harus berupa JPG,JPEG,atau PNG',
                    'max_size' => 'ukuran file pada kolom cover melebihi batas maksimum'
                ]
            ],

        ]);
        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }
        $image = $this->request->getFile('cover');

        //generate nama file yang unik
        $imageName = $image->getRandomName();
        //pindahkan file ke direktori penyimpanan
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_film'=> $this->request->getPost("nama_film"),
            'id_genre'=> $this->request->getPost("id_genre"),
            'duration'=> $this->request->getPost("duration"),
            'cover'=> $imageName,
        ];
        $this->Film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to('/film');
    }

    public function update($id){
        
    }

    //memanggil fungsi getdatabyid yang akan diakses pada url nanti
    public function find_byid()
    {
        //memanggil fungsi getDataByID pada model
         dd($this->Film -> getDataByID(1));   
    }

    //memanggil fungsi getdataby yang akan diakses pada url nanti
    public function find_bywhere(){
        //memanggil fungsi getDataBy pada model
         dd($this->Film -> getDataBy(''));   
    }

    //memanggil fungsi getorderby yang akan diakses pada url nanti
    public function find_ordeby(){
        //memanggil fungsi getOrderBy pada model
         dd($this->Film -> getOrderBy());   
    }

    //memanggil fungsi limit yang akan diakses pada url nanti
    public function find_limit(){
        //memanggil fungsi getLimit data pada model
         dd($this->Film -> getLimit());   
    }

    //memanggil fungsi seuai dengan kolom yang akan diakses pada url nanti
    public function find_kolom(){
        //memanggil fungsi getFilmAll  pada model
         dd($this->Film -> getFilmAll());   
    }




}
