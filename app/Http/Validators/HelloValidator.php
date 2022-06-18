<?php
namespace App\Http\Validator;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator {
  public function validateHello($attribute, $value, $parameters) {
    return $value % 2 == 0;
  }
}