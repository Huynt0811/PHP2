<?php

namespace App\Core\Form;

use App\Core\Form\Field;

class Form {
    public static function begin($action, $method)
    {
        echo sprintf("<form class='form' action='%s' method='%s'", $action, $method);
        return new Form();
    }


    public static function end()
    {
        return '</form>';
    }

    public function field($attribute){
        return new Field($attribute);
    }
}