<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\DeleteException;
use PDO;

/**
 * Summary of Posts
 */
class Product extends BaseModel
{

    // ghi đè method và cả (thuộc tính) của class cha
    protected $table = "products";

    // Thêm bài đăng
    /**
     * Thêm bài viết
     * @param string $title
     * @param string $content
     * @return array
     */
    public function addProudct($data)
    {
        return $this->createData($this->table, $data);
    }


    // Sửa bài đăng
    public function updateProudct($id, $title, $content)
    {
        $data = [
            'title' => $title,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $conditions = [
            'id' => $id,
        ];

        return $this->updateData($this->table, $data, $conditions);
    }

    /**
     * validation
     * Summary of deleteProudct
     * @param int $id
     * @throws DeleteException
     * @return void
     */
    public function deleteProudct($conditions)
    {
        $this->deleteData($this->table, $conditions);
    }


    // Xem bài đăng
    public function viewProudct($id, $fields, $conditions)
    {
        return $this->readData($this->table, $fields, $conditions, 0);
    }

    /**
     * Lấy danh sách bài viết getAllProudcts
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
