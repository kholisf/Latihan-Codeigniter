<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function detail($slug)
    {
        echo $slug;
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();
        $data = [

            'title' => "komik : BroliWEB",
            'komik' => $komik
        ];


        // $komikModel = new \App\Models\KomikModel();
        // $komikModel = new KomikModel();
        // dd($komik);




        // cara koneksi db tanpa model
        // $db = \config\Database::connect();
        // $komik = $db->query("Select * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }
        // dd($komik);



        return view('komik/index', $data);
    }
}
