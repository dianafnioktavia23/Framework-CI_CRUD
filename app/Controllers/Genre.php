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
      

}
