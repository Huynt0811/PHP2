<div class="container">
    <form class="form" action="/admin/categories/save" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Name Categories:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_categories">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success" name="save">Save</button>
            <a class="btn btn-primary" href="/admin/categories/list">List Categories</a>
        </div>
    </form>
</div>