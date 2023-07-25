<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Page'
         ];
        return view('Userfolder/User',$data);
    }
}
