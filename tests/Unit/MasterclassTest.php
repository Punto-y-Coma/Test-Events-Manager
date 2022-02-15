<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Masterclass;

class MasterclassTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
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

   /*  public function test_masterclass_vacants_are_filled()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();
        $user = User::factory(30)->create();

        // When
        foreach ($user->masterclasses as $subscriptions){
            $subscriptions = $subscriptions->pivot->masterclass_id = $masterclass->id;
        }

        $actual = $masterclass->vacants;
        
        // Then
        $this->assertDatabaseCount('user_id', $actual);
    }

    public function test_masterclass_vacants_are_not_still_filled()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();
        $masterclass->vacants = 20;
        $user = User::factory(5)->create();

        // When
        foreach ($user->masterclasses as $subscriptions){
            $subscriptions = $subscriptions->pivot->masterclass_id = $masterclass->id;
        }

        $actual = $masterclass->vacants;
        
        // Then
        $this->assertDatabaseCount('user_id', $actual);
    }

    public function test_masterclass_is_in_date()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();

        // When
        $expected >= date("Y-m-d");
        $masterclass->date = "2200-03-30";
        $actual = $masterclass->date;
        
        // Then
        $this->assertEquals($expected, $actual, "masterclass is in date");

    }

    public function test_masterclass_is_out_of_date()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();

        // When
        $expected < date("Y-m-d");
        $masterclass->date = "2000-03-30";
        $actual = $masterclass->date;
        
        // Then
        $this->assertEquals($expected, $actual, "masterclass is out of date");

  
    } */
    
}
