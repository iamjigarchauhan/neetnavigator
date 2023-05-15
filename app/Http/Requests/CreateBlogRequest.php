<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'title'=> 'required',
            'author'=> 'required',
            'publish_at'=> 'required',
            'featuredimage'=> 'sometimes|mimes:jpg,jpeg,png,bmp,tiff|max:4096|dimensions:min_width=1200,min_height=500'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'The title is required',
            'publish_at.required'=> 'The published date is required',
            'author.required'=> 'The author is required',
            'featuredimage.mimes'=> 'Please insert image only',
            'featuredimage.max'=> 'Image should be less than 4 MB',
        ];
    }
}
