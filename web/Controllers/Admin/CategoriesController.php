<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Categories;

class CategoriesController extends BaseController
{

    private $_category;

    public function __construct()
    {
        $this->_category = new Categories;
    }

    public function list()
    {
        $fields = [
            'id',
            'name_categories'
        ];

        $conditions = [];

        $data = $this->_category->getAll($fields, $conditions, 12);

        $this->render('admin/categories/list', $data);
    }


    public function categoriesUpdate($id)
    {
        $fields = [
            'id',
            'name_categories'
        ];

        $conditions = [
            key($id) => reset($id)
        ];
        $data = $this->_category->getDetail($fields, $conditions);
        $this->render('admin/categories/update', $data);
    }
    public function categoriesUpdateSave($id)
    {
        $fields = [
            'id',
            'name_categories'
        ];
        $conditions = [
            key($id) => reset($id)
        ];
        $this->_category->updateCategories($id, $fields, $conditions);
        header("location: ../list");
    }
    public function categoriesDetail($id)
    {
        $fields = [
            'id',
            'name_categories'
        ];

        $conditions = [
            key($id) => reset($id)
        ];
        $data = $this->_category->getDetail($fields, $conditions);


        $this->render('admin/categories/detail', $data);
    }
    public function categoriesCreate()
    {
        $this->render('admin/categories/create');
    }
    public function categoriesSave()
    {
        $data = [
            'name_categories' =>  $_POST['name_categories']
        ];
        $isValid = true;
        if (empty($_POST['name_categories'])) {
            $errors[] = "First name is required";
            $isValid = false;
        };
        if ($isValid) {
            $categories = new Categories();
            $categories->addCategories($data);
            echo "Create New categories Successfully <br>";
            // $this->redirect('categoriess', $data);
            header("location: list");
        } else {
            echo "Chưa thêm Categories";
            header("location: list");
        }
    }
    public function categoriesDelete($id)
    {
        $conditions = [
            key($id) => reset($id)
        ];
        $this->_category->deleteCategories($conditions);
        header("location: ../list");
    }
}
