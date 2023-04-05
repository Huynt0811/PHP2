<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require_once 'config/routes.php';



// use App\Models\Posts;
// $posts = new Posts();

// Thêm dữ liệu
// $posts->createData('posts', array(
//     'title' => 'Bài viết số 1',
//     'content' => 'Nội dung bài viết số 1'
// ));


// Lấy dữ liệu cho 1 post
// $data = $posts->viewData('posts', ['id', 'title', 'content'], ['id' => 1]);

// lấy dữ liệu cho nhiều post
// $data = $posts->viewData('posts', ['id', 'title', 'content'], []);

// foreach($data as $value){
//     echo $value['title']. '<br>';
// }

// // Sửa dữ liệu
// $posts->updatePost(1, 'Bài viết mới', 'Nội dung bài viết mới');

// // Xóa dữ liệu
// $posts->deletePost("1xx");