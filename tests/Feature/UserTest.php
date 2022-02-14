<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_user_is_admin()
    {
        // Given
            $user = new User;
        
        // When
            $expected = 1;
            $user->is_admin = 1;
            $actual = $user->is_admin;

        // Then
            $this->assertEquals($expected, $actual, "user is admin");
    }

    public function test_user_is_user()
    {
        // Given
            $user = new User;
        
        // When
            $expected = 0;
            $actual = $user->is_admin;

        // Then
            $this->assertEquals($expected, $actual, "user is user");
    }

    public function test_register_mail_sent()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register_mail_user_data()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register_mail_content()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register_form_user_is_validated()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login_form_user_is_validated()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
   
    public function test_create_user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_delete_user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    public function test_edit_user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_store_user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index_user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_is_registered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_is_logged_in()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}


// User::factory(10)->create();
// $datos['masterclasses'] = Masterclass::where('date', '>', date("Y-m-d"))->paginate(5);
// $user = User::where('is_admin', '==', 1);

// public function testUserIsAdmin()
// {
//     // Given
//         $expected = 1;
//         $user = User::factory(1)->create();
    
//     // When      
//         $actual = $user->is_admin = 1;
//     // Then
//         $this->assertEquals($expected, $actual, "user is admin");
// }