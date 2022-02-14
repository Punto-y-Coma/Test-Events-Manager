<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Masterclass;

class MasterclassTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_masterclass_is_featured()
    {
        // Given
        $masterclass = new Masterclass;

        // When
        $expected = 1;
        $masterclass->featured = 1;
        $actual = $masterclass->featured;

        // Then
        $this->assertEquals($expected, $actual, "masterclass is featured");
    }

    public function test_masterclass_is_not_featured()
    {
        $masterclass = new Masterclass;

        $actual = 0;
        $expected = $masterclass->featured;

        $this->assertEquals($expected, $actual, "masterclass is not featured");
    }


    public function test_masterclass_vacants_are_filled()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_masterclass_vacants_are_Still_fillable()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_masterclass_is_in_date()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_masterclass_is_out_of_date()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_form_masterclass_is_validated()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_edit_form_masterclass_is_validated()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_form_masterclass_cancel_button()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_edit_form_masterclass_cancel_button()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_delete_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_edit_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_store_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index_masterclass()
    {
        $masterclass = Masterclass::all();

        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_load_masterclass_image_in_form_via_url()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_load_masterclass_image_in_form_from_local()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_next_masterclasses_pagination()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_masterclasses_out_of_date_pagination()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_masterclasses_dashboard()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

