<?php

namespace App\Rules\Admin\Auth;

use App\Models\Admin;
use App\Models\StaticConst;
use Illuminate\Contracts\Validation\Rule;

class Login implements Rule
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
        $Admin = Admin::where('email',$value)->first();
        if($Admin->status ?? '' == StaticConst::STATUS[0]){
           return true;
        }else{
           return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The Status Is Not Active';
    }
}
