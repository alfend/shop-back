<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'password' => 'required|min:6'
        ];
    }

    public function createUser(): Client
    {
        $user = $this->fillUser(new Client());
        return $user;
    }

    public function fillUser(Client $user): Client
    {
        $user->email = $this->get('email');
        $user->name = $this->get('name');
        $user->password = $this->get('password');
        $user->save();

        return $user;
    }
}
