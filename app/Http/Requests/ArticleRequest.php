<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|unique:articles|min:5',
            'body' => 'required|min:10',
            'img' => 'image|required',
            'category_id' => 'required',
            // 'tags' =>'required',
        ];

        
    }
    public function messages()
    {
        return[
            'title.required'=> ' il titolo è richiesto',
            'title.max'=> 'il tuo titolo è troppo corto',
            'subitile.required'=> ' il sottotitolo è richiesto',
            'subitile.max'=> 'il tuo sottotitolo è troppo corto',
            'body.required'=> ' il testo dell\'articolo e\' richiesto',
            'body.max'=> 'il tuo articolo è troppo corto',
        ];
    }
}
