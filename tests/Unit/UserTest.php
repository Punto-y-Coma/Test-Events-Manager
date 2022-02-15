<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
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

}
