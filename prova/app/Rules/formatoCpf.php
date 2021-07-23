<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class formatoCpf implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $cpf = $value;

        if(substr($cpf, 3, 1) == '.' &&
            substr($cpf,7,1)  == '.' &&
            substr($cpf,11,1)  == '-' )
        {
            return true;
        }



        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
