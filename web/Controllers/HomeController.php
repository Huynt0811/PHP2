<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController{

    public function index()
    {
        $data = [
            "user",
            "log"
        ];
        return $this->render('home', $data);
    }
    public function register(){
        return $this->render('register');
    }

}