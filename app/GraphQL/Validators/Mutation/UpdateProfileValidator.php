<?php

namespace App\GraphQL\Validators\Mutation;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class UpdateProfileValidator extends Validator
{
    public function authorize()
    {
        return true;
    }
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'username' => [
                'string',
                'max:255',
                'regex:/^[a-z0-9_.]+$/',
                'unique:users,username,' . Auth()->user()->id, // Ignore unique verification on same ID
            ],
            'email'    => [
                'email',
                'unique:users,email,' . Auth()->user()->id, // Ignore unique verification on same ID
            ],
        ];
    }
}
