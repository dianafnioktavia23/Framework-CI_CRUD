<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $Genre;

    

    //step 3 membuat fungsi construct untuk inisiasi class model(filmmodel)
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Genre = new GenreModel();
    }

    public function index()
    {
        $data['semuaGenre'] = $this -> Genre -> getAllData();
        return view("Film/semuaGenre", $data);
    }

    public function add_genre(){
        $data['genre'] = $this -> Genre -> getAllData();
        $data["errors"] = session('errors');
        return view("genre/add_genre", $data);
    }
      

    public function update($id_genre)
    {
        $decryptedId = decryptUrl($id_genre);
        $data["errors"] = session('errors');
        $data["semuaGenre"] = $this-> Genre -> getDataByID ($id_genre);
        return view("genre/edit_genre", $data);
    }


    public function edit_genre()
    {
        $validation = $this->validate([
            'nama_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Genre harus diisi'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $id_genre = $this->request->getPost('id_genre');
        $data = [
            'nama_genre' => $this->request->getPost('nama_genre'),
        ];

        $this->Genre->update($id_genre, $data);

        session()->setFlashdata('success', 'Data berhasil diupdate.');
        return redirect()->to("/genre");
    }


public function baru(){
    $validation =$this->validate([
        'nama_genre' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'kolom Nama genre Harus Diisi'
            ]
        ],

    ]);
    if (!$validation) {
        $errors = \Config\Services::validation()->getErrors();
        return redirect()->back()->withInput()->with('errors', $errors);
    }

    $data = [
        'nama_genre'=> $this->request->getPost("nama_genre"),
    ];
    $this->Genre->save($data);
    session()->setFlashdata('success', 'Data berhasil disimpan.');
    return redirect()->to('/genre');
}

public function hapus($id_genre)
{
    $decryptedId = decryptUrl($id_genre);
    $this->Genre->delete($decryptedId);
    session()->setFlashdata('success', 'Data berhasil dihapus.');

    return redirect()->to('/genre');
}


}