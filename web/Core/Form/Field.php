<?php

namespace App\Core\Form;

use App\Core\Form\ValidatableInterface;
use App\Core\Form\FormElement;


class Field extends FormElement implements ValidatableInterface
{

    public const TYPE_TEXT = 'text';

    public const TYPE_PASSWORD = 'password';

    public const TYPE_NUMBER = 'number';


    public string $type;

    public string $attribute;


    public function __construct(string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return
        
            sprintf(
                '<div class="form-group"><label for="">%s: </label><input type="%s" name="%s" ></div>',
                $this->getLabel($this->attribute),
                $this->type,
                $this->attribute
            );
    }


    /**
     * @return $this
     */
    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function labels(): array
    {
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Your Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm password'
        ];
    }


    public function getLabel($attribute)
    {
        return $this->labels()[$attribute] ?? $attribute;
    }

    public function validate($input): bool {
        // Kiểm tra xem đầu vào có phải là một chuỗi không
        if (!is_string($input)) {
            return false;
        }
        // Kiểm tra xem đầu vào có rỗng hay không
        if (empty(trim($input))) {
            return false;
        }
        // Thực hiện các kiểm tra khác tùy vào yêu cầu của ứng dụng
        // ...
        // Nếu không có lỗi nào, trả về true
        return true;
    }
    
}