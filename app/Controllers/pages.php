<?php

// app/Controllers/Home.php

namespace App\Controllers;

use CodeIgniter\Controller;

class pages extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Utama'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About me'
        ];

        return view('pages/about', $data);
    }
    
    public function contact()
    {
        $data=['title'=>'contact',
        'alamat'=>[
            [
         'tipe' =>  'rumah',
        'kota'=>  'kota serang',

        ],
        [
            'tipe'=>'jalan kantor',
            'kota'=>'cilegon',
        ]
        ]
        ];
        return view('pages/contact',$data);
    }
    
}
