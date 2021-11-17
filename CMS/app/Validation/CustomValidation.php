<?php
namespace App\Validation;

class CustomValidation {

    public function figure(): bool
    {
        $error = lang('errors.figure');
        return false;
    }
  
    public function pattern(string $str = null, string $val, array $data): bool
    {
        $regex = '/^(' . str_replace('OR', '|', $val) . ')$/u';
        if(!preg_match($regex, $str)) {
            $error = 'Voldoet niet aan de eisen!';
            return false;
        }
        return true;
    }
}