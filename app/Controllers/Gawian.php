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

    public function create()  {
        $data = [
            'title' => 'Gawian Page'
         ];
        return view('Gawianfolder/form',$data);
    }

    public function store()  {
        //get data cara pertama
        //  $data = $this->request->getPost();

         //get data cara kedua
        $data = [
           'name' => $this->request->getPost('name'),
           'description' => $this->request->getPost('description')
        ];


         $this->db->table('gawi')->insert($data);

         if ($this->db->affectedRows() > 0) {
            return redirect()->to('Gawian')->with('success','success saved');
         }
    }
}
