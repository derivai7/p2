<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

abstract class ApiRequest extends FormRequest
{
    use ApiResponse;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    abstract public function rules(): array;

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->apiError(
            $validator->errors(),
            ResponseAlias::HTTP_UNPROCESSABLE_ENTITY
        ));
    }

    protected function failedAuthorization()
    {
        throw new HttpResponseException($this->apiError(
            null,
            ResponseAlias::HTTP_UNAUTHORIZED
        ));
    }
}
