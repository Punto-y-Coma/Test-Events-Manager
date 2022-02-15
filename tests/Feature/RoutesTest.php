<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
        $hey = $user->is_admin;
        //user is registered and login
        $response = $this->get(route('pages.home'));

        //Then
        $response->assertStatus(200)
                 ->assertViewIs('pages.home');
    }

    public function test_admin_dashboard()
    {
        //Given
        $response = $this->get(route('pages.admin'));

        //When
        //user is registered and login

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
                 ->assertViewIs('/register');
    }

    public function test_login_form()
    {
         //Given
        $response = $this->get('/login');
        
        //Then
        $response->assertStatus(200)
                 ->assertViewIs('/login');
    }

    public function test_create_masterclass_form()
    {
       //Given
       $response = $this->get('masterclass.create');
        
       //Then
       $response->assertStatus(200)
                ->assertViewIs('pages.masterclass.create');
    }

   /*  public function test_edit_masterclass_form()
    {
         //Given
       $response = $this->get('masterclass.edit');
        
       //Then
       $response->assertStatus(200)
                ->assertViewIs('pages.masterclass.edit');
    } */

}
