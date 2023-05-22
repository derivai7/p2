<?php

namespace App\Http\Requests;

use http\Env\Request;
use Symfony\Component\HttpFoundation\Request as RequestAlias;

class TodoRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->method() == RequestAlias::METHOD_POST) return true;
        $todo = $this->route('todo');
        return auth()->user()->id == $todo->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'todo' => 'required|string|max:255',
            'label' => 'nullable|string',
            'done' => 'nullable|boolean'
        ];
    }
}
