<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderStoreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
                   
            'rec' => 'required',                             // 收货人名字
            'phone' => 'required|regex:/^[1-9]{1-11}$/',     // 收货人电话
            'addr' => 'required',                            // 收货地址
            'uname' => 'required',                           // 下单人名字
            'tel' => 'required|regex:/^[1-9]{1-11}$/',       // 下单人电话
           
            // 'SendDate' => 'required',                        // 收货日期
            // 'TodDate' => 'required',                         // 收货时间
        ];
    }

    public function messages()
    {
        return [
            'uname.required' => '订花人必填',
            'uname.regex' => '订花人名格式不正确',
            'tel.regex' => '订花人电话格式不正确',
            'rec.required' => '收货人必填',
            'rec.regex' => '收货人格式不正确',
            'phone.required' => '收货人电话必填',
            'phone.regex' => '收货人电话格式不正确',
            'addr.required' => '收货地址必填',
            'SendDate.required' => '收货日期必填',
            'TodDate.required' => '收货时间必填',
            
            
        ];
    }
}
