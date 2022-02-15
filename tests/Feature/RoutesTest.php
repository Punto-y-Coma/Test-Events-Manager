<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RoutesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_welcome()
    {
        //Given
        $response = $this->get(route('welcome'));
        //When
        //Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_home()
    {
        //Given
        $user = new User;
        
        //When
        $role = $user->is_admin;
        $response = $this->get('/home');

        //Then
        $response->assertStatus(200)
                 ->assertViewIs('pages.home');
    }

    public function test_admin_dashboard()
    {
        //Given
        $user = new User;
        
        //When
        $user->is_admin = 1;
        $role = $user->is_admin;
        $response = $this->get('/home');

        //Then
        $response->assertStatus(200)
                 ->assertViewIs('pages.admin');
    }

    public function test_register_form()
    {
        //Given
        $response = $this->get('/register');

        //Then
        $response->assertStatus(200)
                 ->assertViewIs('auth.register');
    }

    public function test_login_form()
    {
         //Given
        $response = $this->get('/login');
        
        //Then
        $response->assertStatus(200)
                 ->assertViewIs('auth.login');
    }

    public function test_create_masterclass_form()
    {
       //Given
       $response = $this->get(route('masterclass.create'));
        
       //Then
       $response->assertStatus(200)
                ->assertViewIs('pages.masterclass.create');
    }


}
