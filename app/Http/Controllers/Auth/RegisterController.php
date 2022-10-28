<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Establishment;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
           'cpf' =>['required', 'string', 'min:11', 'unique:users'],
           'phone' =>['required', 'string', 'min:10'],
           'type' =>['required', 'string', 'max:255'],
           'address' =>['required', 'string', 'max:255'],
           'cnpj' =>['required', 'string', 'min:14', 'unique:establishments'],
           'trading_name' =>['required', 'string', 'max:255'],
           'company_name' =>['required', 'string', 'max:255'],
           'company_address' =>['required', 'string', 'max:255'],
           'company_phone' =>['required', 'string', 'min:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $establishment = Establishment::create([
          'cnpj'=> $data['cnpj'],
          'trading_name'=> $data['trading_name'],
          'company_name'=> $data['company_name'],
          'address'=> $data['company_address'],
          'phone'=> $data['company_phone'],
        ]);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'phone' => $data['phone'],
            'type' => $data['type'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'establishment_id' => $establishment->id,
        ]);
    }
}
