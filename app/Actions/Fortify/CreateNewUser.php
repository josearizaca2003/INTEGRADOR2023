<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'Apellido' => ['required', 'string', 'max:255'],
            'FechaNacimiento' => ['required', 'date'],
            'EstadoCivil' => ['required', 'string'],
            'Rol' => ['required', 'in:user,admin'], // Cambiado a 'in' en lugar de 'user' y 'admin'
            'Celular' => ['required', 'numeric'],
            'DNI' => ['required', 'numeric'], // Cambiado ',' a '|' para separar las reglas
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'Apellido' => $input['Apellido'],
            'FechaNacimiento' => $input['FechaNacimiento'],
            'EstadoCivil' => $input['EstadoCivil'],
            'Rol' => $input['Rol'],
            'Celular' => $input['Celular'],
            'DNI' => $input['DNI'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
