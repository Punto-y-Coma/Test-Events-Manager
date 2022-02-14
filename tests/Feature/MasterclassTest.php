<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Masterclass;

class MasterclassTest extends TestCase
{
    use RefreshDatabase;
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
        // Given
        $masterclass = new Masterclass;

         // When
        $actual = 0;
        $expected = $masterclass->featured;

        // Then
        $this->assertEquals($expected, $actual, "masterclass is not featured");
    }


    public function test_masterclass_vacants_are_filled()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_masterclass_vacants_are_Still_fillable()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_masterclass_is_in_date()
    {
        // Given
        $masterclass = new Masterclass;

        // When
        $actual = 
        $response = $masterclass->date;

        // Then
        $this->assertEquals($expected, $actual, "masterclass is in date");

    }

    public function test_masterclass_is_out_of_date()
    {
          // Given
          $masterclass = new Masterclass;

          // When
          $actual = 
          $masterclass->date;
          $response = $masterclass->date;
  
          // Then
          $this->assertEquals($expected, $actual, "masterclass is in date");
  
    }

    public function test_create_form_masterclass_is_validated()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_edit_form_masterclass_is_validated()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_create_form_masterclass_cancel_button()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_edit_form_masterclass_cancel_button()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_delete_masterclass()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_create_masterclass()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_edit_masterclass()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_store_masterclass()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_index_masterclass()
    {
        // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_load_masterclass_image_in_form_via_url()
    {
       // Given
       $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_load_masterclass_image_in_form_from_local()
    {
       // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_next_masterclasses_pagination()
    {
       // Given
        $masterclass = Masterclass::all();

        // When
        $response = $this->get(route('welcome', $masterclass = ['masterclass']));

        // Then
        $response->assertStatus(200)
                 ->assertViewIs('welcome');
    }

    public function test_masterclasses_out_of_date_pagination()
    {
        // Given
        Masterclass::factory(3)->create();
        
        // When
        $masterclasses_out_date = Masterclass::where('date', '<', date("Y-m-d"))->orderBy('date', 'desc')->paginate(4, ['*'], 'masterclasses_out_date');
        $mclass = $masterclasses_out_date->toArray();
        $mclass[0]->date = 2025-02-02;
        $mclass[1]->date = 2025-02-02;
        $mclass[2]->date = 1025-02-02;
        $response = dd($mclass[1]);
        
        $response = $this->get(route('welcome', [$masterclasses_out_date]));
        // Then
        $response->assertStatus(200)
                 ->assertViewHasAll($masterclasses_out_date[2])
                 ->assertViewIs('welcome');
    }

  
}

