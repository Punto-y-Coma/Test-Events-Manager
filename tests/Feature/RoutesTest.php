<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_welcome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_dashboard()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register_form()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login_form()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_masterclass_form()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_edit_masterclass_form()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}
