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
     public function testUserIsAdmin()
    {
        // Given
            $user = new User;
        
        // When
            $expected = 0;
            $actual = $user->is_admin;

        // Then
            $this->assertEquals($expected, $actual, "user isn't admin");
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