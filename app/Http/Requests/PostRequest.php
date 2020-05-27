<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:3|max:190',
            'description'=>'required|min:3',
            'content'=>'required|min:3',
            'image'=>'required|image',
            'category'=>'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required, Please provide one',
            'description.required' => 'Please provide some description for this post',
            'content.required' => 'Please Add the full content of this post',
            'image.required' => 'Please provide an image for this post',
            'category.required' => 'Please Select a category for this post', 
        ];
    }
}
