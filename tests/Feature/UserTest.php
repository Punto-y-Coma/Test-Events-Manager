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

}
