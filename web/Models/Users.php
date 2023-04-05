<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\DeleteException;

/**
 * Summary of Posts
 */
class Users extends BaseModel
{

    
    // ghi đè method và cả (thuộc tính) của class cha
    protected $table = "user";
    protected $fields=['id','firstname','lastname','email','password'];
     public function getUser($data){ 
        $conditions= ['email'=>$data['email'],'password'=>$data['password']];
        if( $this->readData($this->table,$this->fields ,$conditions)){
            return $this->readData($this->table,$this->fields ,$conditions);
        }
        return false;
        
    }
    // Thêm bài đăng
    public function addUser($data)
    {
        $data = [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'password' => $data['password'],
            'email'=>$data['email']
        ];

        return $this->createData($this->table, $data);
    }

	/**
	 * @return mixed
	 */
	public function getTable() {
		return $this->table;
	}
    public function checkLogin($fields, $conditions)
    {
        return $this->getOne($this->table, $fields, $conditions);
    }
}