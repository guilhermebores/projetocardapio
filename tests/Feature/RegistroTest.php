<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistroTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_shouldnt_register_User_when_invalid_form()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
          ->assertInvalid(['name', 'email', 'password']);

    }
    public function test_shouldnt_register_User_when_valid_form()
    {
      $response = $this->post('/register',[
        'name' => 'guilherme',
        'email' => 'gui23@gmail.com',
        'password' => '123123123',
        'password_confirmation' => '123123123',
        'company_name' => ' bar do ze',
        'trading_name' => 'bar king',
        'address' => 'rua b',
        'phone' => '(42)9999999',
        'cnpj' => '1234567891234',
        'company_phone' => '(42)8888888',
        'company_address' => '9876543219876',
        'type' => 'maneger'

      ]);

      $response->assertRedirect()
        ->assertSessionHasNoErrors();

      $this->assertDatabaseHas('users', ['email' => 'gui23@gmail.com']);
      $this->assertDatabaseHas('establishments', ['cnpj' => '1234567891234']);

    }

}
