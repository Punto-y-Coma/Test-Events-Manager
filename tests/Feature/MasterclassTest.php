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

    public function test_create_masterclass()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();

        // When
        $response = $this->post(route('masterclass.store'), $masterclass = ['masterclass']);
        
        // Then
        $response->assertStatus(201)
                 ->assertSeeText($masterclass->name)
                 ->assertViewIs('pages.admin');
    }

   /*  public function test_edit_masterclass()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();

        // When
        $this->post(route('masterclass.store'), $masterclass = ['masterclass']);
        $masterclass->name = 'Masterclass editada';
        $response = $this->post(route('masterclass.{$id}'), $masterclass = ['masterclass']);

        // Then
        $response->assertStatus(201)
                 ->assertSeeText('Masterclass editada')
                 ->assertViewIs('pages.admin');
    } */

    public function test_show_masterclass_card_view()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();

        // When
        $response = $this->post(route('masterclass.store'), $masterclass = ['masterclass']);
        
        // Then
        $response->assertStatus(201)
                 ->assertSeeText($masterclass->name)
                 ->assertViewIs('welcome');
    }

    public function test_delete_masterclass()
    {
       // Given
       $masterclass = Masterclass::factory(1)->create();

       // When
       $response = $this->post(route('masterclass.store'), $masterclass = ['masterclass']);
       $response = $this->delete(route('masterclass.destroy.{$masterclass->id}'), $masterclass = ['masterclass']);

       // Then
       $response->assertStatus(200)
                ->assertViewMissing($masterclass->name)
                ->assertViewIs('pages.admin');
    }
    

    public function test_next_masterclasses_pagination()
    {
       // Given
       $masterclasses_out_date = Masterclass::factory(3)->create();
        
       // When
       $masterclasses_out_date->toArray();
       $mclass[0]->date = 2025-02-02;
       $mclass[1]->date = 2025-02-02;
       $mclass[2]->date = 1025-02-02;
       $mclass = Masterclass::where('date', '>=', date("Y-m-d"))->orderBy('date', 'desc')->paginate(4, ['*'], 'masterclasses_out_date');
       $response = dd($mclass[1]);
       
       $response = $this->get(route('welcome', [$masterclasses_out_date]));
       // Then
       $response->assertStatus(200)
                ->assertViewHasAll($masterclasses_out_date[2])
                ->assertViewIs('welcome');
    }

    public function test_masterclasses_out_of_date_pagination()
    {
        // Given
        $masterclasses_out_date = Masterclass::factory(3)->create();
        
        // When
        $masterclasses_out_date->toArray();
        $mclass[0]->date = 2025-02-02;
        $mclass[1]->date = 2025-02-02;
        $mclass[2]->date = 1025-02-02;
        $mclass = Masterclass::where('date', '<', date("Y-m-d"))->orderBy('date', 'desc')->paginate(4, ['*'], 'masterclasses_out_date');
        $response = dd($mclass[1]);
        
        $response = $this->get(route('welcome', [$masterclasses_out_date]));
        // Then
        $response->assertStatus(200)
                 ->assertViewHasAll($masterclasses_out_date[2])
                 ->assertViewIs('welcome');
    }

  /*  public function test_create_form_masterclass_is_validated()
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
    } */
}

