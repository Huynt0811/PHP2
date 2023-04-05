<?php

use App\Core\Form\Field;
use App\Core\Form\Form;

function displayErrorMessage($errorMessage)
{
    if (!empty($errorMessage) || !$errorMessage == null) {
        echo $errorMessage;
    }
    // displayErrorMessage($error_messages['firstname']);
}
?>
<div class="container mb-3 alert alert-secondary">
    <form action="/createUser" method="post">
        <h1>Create an account</h1>
        <div class="mb-3">
            <label class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname">
            <?php displayErrorMessage($error_messages['firstname']);?>
        </div>
        <div class="mb-3">
            <label class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname">
            <?php displayErrorMessage($error_messages['lastname']); ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
            <?php displayErrorMessage($error_messages['email']); ?>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            <?php displayErrorMessage($error_messages['password']); ?>
        </div>

        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </form>
</div>\