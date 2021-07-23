<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class formatoPreco implements Rule
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
        $preco = $value;

        if(substr($preco, -3, 1) == '.' &&
            is_numeric(substr($preco, -2, 1))&&
            is_numeric(substr($preco, -1, 1)))
        {
            if(is_numeric($preco) && $preco>0)
            {
                return true;
            }
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
        return 'Formato incorreto para o Preco. Formato correto (EX: 9.90)';
    }
}
