<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home : BroliWEB'
        ];
        return view('pages/home', $data);
    }
    //--------------------------------------------------------------------
    public function about()
    {
        $data = [
            'title' => 'About : BroliWEB'
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us : BroliWEB',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Ali Napiah',
                    'kota' => 'Mataram'


                ],
                [
                    'tipe' => 'Bisnis',
                    'alamat' => 'Jl. Lalu Mesir',
                    'kota' => 'Mataram'

                ]
            ]
        ];


        return view('pages/contact', $data);
    }
}
