<?php
$current_month_year     = date('Y_m');
$target_directory = 'uploads/' . $current_month_year . '/';
?>
<div class="container-fluid">
    <div class="row">
        <?php foreach ($data as $item) : ?>
            <div class="col-lg-4">
                <div class="alert alert-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $item['name'] ?? '' ?></h3>
                    </div>
                    <div class="panel-body">
                        <?=$target_directory.$item['img'] ?>
                        <div class="box-img">
                            <img src="../../../../uploads/2023_04/<?=$item['img'] ?>" class="img-thumbnail" alt="">
                        </div>
                        <div class="box-info">
                            <div class="price mb-1">
                                <?= $item['price'] ?? '' ?>
                            </div>
                            <a class="btn btn-info" href="/admin/product/<?= $item['id'] ?>">Xem chi tiết</a>

                            <a class="btn btn-warning" href="/admin/product/<?= $item['id'] ?>">Sửa</a>

                            <a class="btn btn-danger" href="/admin/product/delete/<?= $item['id'] ?>">Xóa</a>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div>
        <a class="btn btn-primary" href="/admin/product/create">Thêm</a>
        <a class="btn btn-success" href="/admin">Admin</a>
    </div>
</div>