<?php

namespace App\Controllers;

use App\Core\Upload;
use Exception;


class BaseController
{
    protected function render($view, $data = [])
    {
        $path        = dirname(__FILE__);
        $head_path   = $path . '/../Views/base/header.php';
        $footer_path = $path . '/../Views/base/footer.php';

        // xác định đường dẫn tới file view
        $viewPath = $path . '/../Views/' . $view . '.php';

        // kiểm tra file view có tồn tại không
        if (!file_exists($viewPath)) {
            throw new Exception('Không tìm thấy view.');
        }

        // truyền dữ liệu vào file view
        extract($data);

        // tải nội dung của file view
        ob_start();
        include $head_path;
        include $viewPath;
        include $footer_path;
        $content = ob_get_clean();

        // hiển thị nội dung của file view
        echo $content;
    }

    protected function redirect($url, $statusCode = 303)
    {
        $validStatusCodes = [301, 302, 303];
        if (!in_array($statusCode, $validStatusCodes)) {
            $statusCode = 303;
        }

        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new Exception("$url is not a valid URL");
        }

        header('Location: ' . $url, true, $statusCode);
        exit;
    }
}
