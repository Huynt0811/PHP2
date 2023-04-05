<div class="container-fluid">
    <div class="row">

        <?php foreach ($data as $item) : ?>
            <div class="col-lg-4">
                <div class="alert alert-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $item['name_categories'] ?? '' ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="box-img">
                            <img src="" class="img-thumbnail" alt="">
                        </div>
                        <div class="box-info">
                            <a class="btn btn-info" href="/admin/categories/<?= $item['id'] ?>">Xem chi tiết</a>

                            <a class="btn btn-warning" href="/admin/categories/update/<?= $item['id'] ?>">Sửa</a>

                            <a class="btn btn-danger" href="/admin/categories/delete/<?= $item['id'] ?>">Xóa</a>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div>
        <a class="btn btn-primary" href="/admin/categories/create">Thêm</a>
        <a class="btn btn-success" href="/admin">Admin</a>
    </div>
</div>