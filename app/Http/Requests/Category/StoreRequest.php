<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{
    /* Paso dos Creamos el Request que valida los datos */
    static public function myRules(){
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts"
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
           
            'slug' => str($this->title)->slug()
        ]);
    }

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
     * @return array<string, mixed>
     */
    public function rules()
    {
       return $this->myRules();
    }
}
