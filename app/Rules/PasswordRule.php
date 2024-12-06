<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PasswordRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check minimum length
        $minLength = 8;
        if (strlen($value) < $minLength) {
            $fail("The :attribute must be at least {$minLength} characters long.");
            return;
        }

        // Check for at least one uppercase letter
        if (!preg_match('/[A-Z]/', $value)) {
            $fail("The :attribute must include at least one uppercase letter.");
            return;
        }

        // Check for at least one lowercase letter
        if (!preg_match('/[a-z]/', $value)) {
            $fail("The :attribute must include at least one lowercase letter.");
            return;
        }

        // Check for at least one digit
        if (!preg_match('/\d/', $value)) {
            $fail("The :attribute must include at least one number.");
            return;
        }

        // Check for at least one special character
        if (!preg_match('/[\W_]/', $value)) {
            $fail("The :attribute must include at least one special character.");
        }
    }
}
