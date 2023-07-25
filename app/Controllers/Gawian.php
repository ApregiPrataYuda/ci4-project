<?php

namespace App\Controllers;

class Gawian extends BaseController
{
    public function index()
    {
          
          $builder = $this->db->table('gawi');
          $query   = $builder->get();
        $data = [
            'title' => 'Gawian Page',
            'query' => $query 
         ];
        return view('Gawianfolder/get',$data);
    }
}
