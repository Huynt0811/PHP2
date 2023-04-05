<?php

namespace App\Interfaces;

use App\Models\Users;
trait LoginTrait
{
    public function login($data)
    {
        $user = new Users();
        $user->getUser($data);
        return  $user->getUser($data);
    }

    public function logout($request)
    {
        // Xử lý đăng xuất tại đây
    }

    public function isLoggedIn()
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
    }
}