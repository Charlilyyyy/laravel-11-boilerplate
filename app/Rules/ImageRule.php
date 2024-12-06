<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ImageRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!File::isFile($value)) {
            $fail('The :attribute is not a valid file.');
            return;
        }

        $maxSizeInBytes = 2 * 1024 * 1024;
        if ($value->getSize() > $maxSizeInBytes) {
            $fail('The :attribute must not exceed 2MB in size.');
            return;
        }

        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        if (!in_array($value->getMimeType(), $allowedMimeTypes)) {
            $fail('The :attribute must be a valid image (jpeg, png, jpg).');
        }
    }
}
