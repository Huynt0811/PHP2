<?php


namespace App\Controllers;

use App\Interfaces\LoginTrait;
use App\Controllers\BaseController;

class UserController extends BaseController 
{
    
    use LoginTrait;

    public function index()
    {
        if ($this->isLoggedIn()) {
            
        } else {
            // Chuyển hướng đến trang đăng nhập
        }
    }
}