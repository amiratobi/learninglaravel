<?php

namespace App\Http\Requests;

use App\User;
use App\Mail\Welcome;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class RegistrationForm extends FormRequest
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
            "name" => "required",
            "password" => "required|confirmed",
            "email" => "required|email"
        ];
    }

    public function persist()
    {
        //Create  User
    	$user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

    	//Sign User In
        auth()->login($user);
        
		//Send Welcome Email
		\Mail::to($user)->send(new Welcome($user));
    }
}
