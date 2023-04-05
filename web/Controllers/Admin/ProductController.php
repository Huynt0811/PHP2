<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Core\Upload;
use App\Models\Product;
use App\Controllers\UploadController;

class ProductController extends BaseController
{

    private $_product;

    public function __construct()
    {
        $this->_product = new Product;
    }

    public function index()
    {
        $this->render('admin/index');
    }
    public function list()
    {
        $fields = [
            'id',
            'name',
            'price',
            'img'
        ];

        $conditions = [];
        $data = $this->_product->getAll($fields, $conditions, 12);

        $this->render('admin/product/list', $data);
    }


    public function productDetail($id)
    {
        $fields = [
            'id',
            'name',
            'price'
        ];

        $conditions = [
            key($id) => reset($id)
        ];
        $data = $this->_product->getDetail($fields, $conditions);


        $this->render('admin/product/detail', $data);
    }
    public function productCreate()
    {
        $this->render('admin/product/create');
    }
    public function productSave()
    {
        $data = [
            "name" =>  $_POST['name'],
            "price" =>  $_POST['price'],
            "img" => '1',
            "description" =>  $_POST['description'],
        ];
        // var_dump($data);die();
        $upload = new UploadController();
        return $upload->postUpload($_FILES['avatar']);
        die();
        $isValid = true;
        if (empty($_POST['name']) || empty($_POST['price'])) {
            $isValid = false;
        }
        if (!is_numeric($_POST['price']) || $_POST['price'] < 0) {
            $isValid = false;
        }
        if (strlen($_POST['description']) > 255) {
            $isValid = false;
        }
        if ($isValid) {
            $product = new Product();
            $product->addProudct($data);
            echo "Create New Product Successfully <br>";
            // $this->redirect('products', $data);
            header("location: list");
        } else {
            $this->redirect('/products');
        }
    }
    public function productDelete($id)
    {
        $conditions = [
            key($id) => reset($id)
        ];
        $this->_product->deleteProudct($conditions);
        header("location: ../list");
    }
}
