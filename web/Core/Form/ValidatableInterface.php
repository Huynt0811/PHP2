<?php

namespace App\Core\Form;

interface ValidatableInterface {
    public function validate($input): bool;
}