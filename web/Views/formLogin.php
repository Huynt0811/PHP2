<?php

use App\Core\Form\Field;
use App\Core\Form\Form;
?>

<div class="container mb-5 alert alert-secondary">
    <form action="/login" method="post">
        <h1>Login </h1>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
    </form>
</div>