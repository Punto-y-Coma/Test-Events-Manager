<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
      /* 
    public function test_index_users()
    { 
         // Given

         // When
 
         // Then
        
    } */

    public function test_create_user()
    {
        // Given
        $user = User::factory(1)->create();

        // When
        $response = $this->post(route('user.store'), $user = ['user']);
        
        // Then
        $response->assertStatus(201)
                 ->assertSeeText($user->name)
                 ->assertViewIs('pages.home');
    }

    public function test_delete_user()
    {
       // Given
       $user = User::factory(1)->create();

       // When
       $this->post(route('user.store'), $user = ['user']);
       $response = $this->delete(route('user.destroy.{$user->id}'), $user = ['user']);
       $expected = NULL;
       $actual = $user->name;
       
       // Then
       $this->assertEquals($expected, $actual, "user has been deleted");
    }

    /* public function test_user_is_registered()
    {
        //Given

        //When
  
        //Then
    } */

/*     public function test_user_is_logged_in()
    {
        //Given

        //When
  
        //Then
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
        // Given
        $user = new User;
        
        // When
            $expected = 1;
            $user->is_admin = 1;
            $actual = $user->is_admin;

        // Then
            $this->assertEquals($expected, $actual, "user is admin");
    }*/
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

 /* 
 
 public function test_user_is_logged_in()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/