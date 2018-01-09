<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Mockery\Exception;

class ApiVali implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        //
        $this->url=$url;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //todo 接口验证
//        try{
//            $json = curlhttp($this->url);
//        }catch (Exception $e){
//            $this->msg = '系统异常';
//            return false;
//        }

        $re = ['errcode' => 200, "message" => time()];
        if ($re['errcode'] != 200) {
            $this->msg = $re["message"];
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->msg;
    }
}
