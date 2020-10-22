<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo " ini controler coba method index";
    }
    public function about()
    {
        echo "nama saya $this->nama;";
    }
    //--------------------------------------------------------------------

}
