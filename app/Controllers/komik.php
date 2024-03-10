<?php

namespace App\Controllers;
use \App\models\komikmodel;
class komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
       $this->komikModel = new KomikModel();
    }

    public function index()
    {
        // $komik=$this->komikModel->findAll();

        $data=[
                'title'=>'komik',
                'komik'=>$this->komikModel->getkomik()
            ];

        //     // mengkoneksikan database tanpa model
        //   $db=\config\Database::connect();
        //   $komik=$db->query("SELECT * FROM komik");
        //  foreach($komik->getResultArray()as $row)
        //  {
        //     d($row);
        //  }
       
        
      
        return view('komik/index', $data);
    }


    public function detail($slug)
    {
    
        $data=[
            'title'=>'detail komik',
            'komik'=>$this->komikModel->getkomik($slug)
        ];
        return view('komik/detail',$data);
    }

    
    public function create()
    {
     
        $data=[
            'title'=>'form tambah komik'
    ];
    return view('komik/create', $data);
    }

}
