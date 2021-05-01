<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsFormUpdateRequest extends FormRequest
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
            'name'=>'required|min:10|max:80',
            'description'=>'required|min:10',
            'category_id'=>'required',
            'province_id'=>'required',
            'price'=>"required|regex:/^\d+(\.\d{1,2})?$/",
            'price_status'=>'required',
            'product_condition'=>'required',
            //'phone_number'=>'numeric|size:10',                         
        ];
    }
}
