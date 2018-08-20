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
            'username' => 'required|unique:users|regex:/^[a-zA-Z]{1}[\w]{5,17}$/',
            'rec' => 'required|unique:users|regex:/^[a-zA-Z]{1}[\w]{5,17}$/',
            'tel' => 'required_with_all:tel|regex:/^[1]{1}[1-9]{2-10}$/',
            'phone' => 'required_with_all:tel|regex:/^[1]{1}[1-9]{2-10}$/',
            'addr' => 'required_with_all:addr',
            'SendDate' => 'required_with_all:SendDate',
            'TodDate' => 'required_with_all:ToDate',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名必填',
            'username.regex' => '用户名格式不正确',
            'rec.required' => '收货人必填',
            'rec.regex' => '收货人必填',
            'tel.regex' => '收货人电话格式不正确',
            'rec.required_with_all' => '收货人电话必填',
            'addr.required_with_all' => '收货地址必填',
            'SendDate.required_with_all' => '收货日期必填',
            'TodDate.required_with_all' => '收货时间必填',
            
            
        ];
    }
}
