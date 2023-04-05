<?php


namespace App\Controllers;

use App\Interfaces\LoginTrait;
use App\Controllers\BaseController;
use App\Core\ValidateInput;
use App\Models\Users;
use Exception;

class AuthController extends BaseController
{

    use LoginTrait;

    public function createUser()
    {
        $data = [
            "firstname" =>  $_POST['firstname'],
            "lastname" => $_POST['lastname'],
            "email" =>  $_POST['email'],
            "password" =>  $_POST['password']
        ];

        $validator = new ValidateInput();

        $isValid = true;
        $error_messages = ['firstname' => '', 'lastname' => '', 'email' => '', 'password' => ''];


        if ($validator->isEmpty($data['firstname'])) {
            $isValid = false;
            $error_messages['firstname'] = $validator->getMessage("Vui lòng nhập họ.");
        } elseif (!$validator->isLengthBetween($data['firstname'], 2, 255)) {
            $isValid = false;
            $error_messages['firstname'] = $validator->getMessage("Họ và tên phải từ 2 đến 255 ký tự.");
        } else {
            $error_messages['firstname'] = '';
        }


        if ($validator->isEmpty($data['lastname'])) {
            $isValid = false;
            $error_messages['lastname'] = $validator->getMessage("Vui lòng nhập tên.");
        } elseif (!$validator->isLengthBetween($data['lastname'], 2, 255)) {
            $isValid = false;
            $error_messages['lastname'] = $validator->getMessage("Họ và tên phải từ 2 đến 255 ký tự.");
        } else {
            $error_messages['lastname'] = '';
        }

        if ($validator->isEmpty($data['email'])) {
            $isValid = false;
            $error_messages['email'] = $validator->getMessage("Vui lòng nhập địa chỉ email.");
        } elseif (!$validator->isValidEmail($data['email'])) {
            $isValid = false;
            $error_messages['email'] = $validator->getMessage("Địa chỉ email không hợp lệ.");
        } else {
            $error_messages['email'] = '';
        }

        // Check for empty inputs and validate the password
        if ($validator->isEmpty($data['email'])) {
            $isValid = false;
            $error_messages['password'] = $validator->getMessage("Vui lòng nhập mật khẩu.");
        } elseif (!$validator->isValidPassword($data['password'])) {
            $isValid = false;
            $error_messages['password'] = $validator->getMessage("Mật khẩu phải chứa ít nhất 4 ký tự, bao gồm chữ cái và số.");
        } else {
            $error_messages['password'] = '';
        };


        if ($isValid) {
            $user = new Users();
            $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user_data = [
                "firstname" =>  $data['firstname'],
                "lastname" =>  $data['lastname'],
                "password" =>  $hashed_password,
                "email" =>  $data['email']
            ];
            $user->addUser($user_data);
            echo "Tạo tài khoản thành công! <br>";
            $this->render('/formLogin');
            // header("location: formLogin"); // Chuyển hướng đến trang đăng nhập

        } else {
            $this->render('/register', ['error_messages' => $error_messages]);

            // $this->redirect('../register',);
        }
    }



    public function getLogin()
    {
        $this->render('/formLogin');
    }
    public function postLogin()
    {
        $validator = new ValidateInput();

        // Validate email
        if (!$validator->isValidEmail($_POST['email'])) {
            $mes = "Lỗi email";
            echo $mes;
            header("location: formLogin");
        }

        // Validate password
        if (!$validator->isLengthBetween($_POST['password'], 4, 32)) {
            $mes = "Lỗi password";
            echo $mes;
            header("location: formLogin");
        }

        $data = [
            "password" =>  md5($_POST['password']),
            "email" =>  $_POST['email']
        ];
        $login = $this->login($data);
        if ($login) {
            $_SESSION["logined"] = "OK";
            $_SESSION["user"] = $login;
            $this->render("/admin/index", $data);
        } else {
            $this->render("/index", $data);
        }
    }


    public function getLogot()
    {
        session_destroy();
        $_SESSION = array();
        header("location: formLogin");
    }
}
