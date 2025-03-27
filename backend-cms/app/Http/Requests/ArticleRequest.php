<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            //
            'title' => 'required',
            // 'image' => 'required',
            'category' => 'required',
            'topic' => 'required',
            'shortDesc' => 'required',
            'detail' => 'required',
            'status' => 'required',
            'slug' => 'required',
            'metaTitle' => 'required',
            'metaDesc' => 'required',
        ];
    }
}
