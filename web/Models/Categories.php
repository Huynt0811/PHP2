<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\DeleteException;
use PDO;

/**
 * Summary of Posts
 */
class Categories extends BaseModel
{

    // ghi đè method và cả (thuộc tính) của class cha
    protected $table = "categories";

    // Thêm bài đăng
    /**
     * Thêm bài viết
     * @param string $title
     * @param string $content
     * @return array
     */
    public function addCategories($data)
    {
        $data = [
            "name_categories" =>  $_POST['name_categories'],
        ];

        return $this->createData($this->table, $data);
    }


    // Sửa bài đăng
    public function updateCategories($id)
    {
        $data = [
            "name_categories" =>  $_POST['name_categories'],
        ];

        $conditions = [
            key($id) => reset($id)
        ];

        return $this->updateData($this->table, $data, $conditions);
    }

    /**
     * validation
     * Summary of deleteCategories
     * @param int $id
     * @throws DeleteException
     * @return void
     */
    public function deleteCategories($conditions)
    {
        $this->deleteData($this->table, $conditions);
    }


    // Xem bài đăng
    public function viewCategories($id, $fields, $conditions)
    {
        return $this->readData($this->table, $fields, $conditions, 0);
    }

    /**
     * Lấy danh sách bài viết getAllCategoriess
     * @param array $fields
     * @param array $conditions
     * @return array
     */
    public function getAll($fields, $conditions, $limit = 0)
    {
        return $this->readData($this->table, $fields, $conditions, $limit);
    }

    public function getDetail($fields, $conditions)
    {
        return $this->selectOne($this->table, $fields, $conditions);
    }
}
