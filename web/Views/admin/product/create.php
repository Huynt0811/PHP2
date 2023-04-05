<div class="container">
    <form class="form" action="/admin/product/save" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Name Product:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price:</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Avatar:</label>
            <input type="file" class="form-control" name="avatar" id="avatar">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="" cols="20" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success" name="save">Save</button>
            <a class="btn btn-primary" href="/admin/product/list">List Product</a>
        </div>
    </form>
</div>