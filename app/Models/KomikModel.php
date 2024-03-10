<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useTimestamps = true;


    public function getkomik($slug=false)
    {
        if($slug==false){
            return $this->findAll();
        }else{
        return $this->where(['slug' => $slug])->first();
    }
}
}