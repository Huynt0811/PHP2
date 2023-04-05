<div class="container-fluid">
    <div class="row">

        <div class="col-lg-4">
            <div class="alert alert-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $data['name'] ?? '' ?></h3>
                </div>
                <div class="panel-body">
                    <div class="box-img">
                        <img src="" class="img-thumbnail" alt="">
                    </div>
                    <div class="box-info">
                        <div class="price mb-1">
                            <?= $data['price'] ?? '' ?>
                        </div>

                        <a class="btn btn-warning" href="/admin/product/<?= $data['id'] ?>">Sửa</a>

                        <a class="btn btn-danger" href="/admin/product/delete/<?= $data['id'] ?>">Xóa</a>

                    </div>
                </div>
            </div>
            <a class="btn btn-primary" href="/admin/product/list">List Product</a>
        </div>