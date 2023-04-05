<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\Upload;


class UploadController extends BaseController
{

    public function upload()
    {
        return $this->render('uploads', []);
    }

    public function postUpload($file)
    {
        $uploader = new Upload($file, '');
        $upload_success = $uploader->uploadFile();
        $upload_link = $uploader->getTargetFile();
        
        if ($upload_success) {
            echo "Tải file lên thành công.";
        } else {
            echo "Tải file lên thất bại. Lỗi: " . implode(", ", $uploader->getErrors());
        }
    }
}
