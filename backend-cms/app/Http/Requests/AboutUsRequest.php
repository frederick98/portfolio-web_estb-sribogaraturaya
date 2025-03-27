<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'mission1_txt' => 'required',
            'mission2_txt' => 'required',
            'mission3_txt' => 'required', 
            'vision1_txt' => 'required', 
            'vision2_txt' => 'required', 
            'vision3_txt' => 'required', 
            'quote_txt' => 'required', 
            'url' => 'required',
            'metaTitle' => 'required',
            // 'canonical_tag' => 'required',
            'metaDesc' => 'required',
        ];
    }
}
