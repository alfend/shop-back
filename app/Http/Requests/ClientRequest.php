<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function createUser(): Client
    {
        $user = $this->fillUser(new Client());
        return $user;
    }

    public function updateUser(Client $user): Client
    {
        return $this->fillUser($user);
    }

    public function rules()
    {
        return [
                'email' => 'required|email',
                'name' => 'required|string|max:255',
                'last_name' => 'nullable|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:255',
                'password' => 'required|min:6'
            ];
    }

    public function fillUser(Client $user): Client
    {
        $user->email = $this->get('email');
        $user->name = $this->get('name');
        $user->last_name = $this->get('last_name');
        $user->middle_name = $this->get('middle_name');
        $user->phone = $this->get('phone');
        $user->password = $this->get('password');
        $user->save();

        return $user;
    }
}
