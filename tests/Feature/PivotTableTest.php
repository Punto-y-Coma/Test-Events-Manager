<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Masterclass;
use App\Models\User;

class PivotTableTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
 /*    public function test_check_all_users_subscribed_to_a_masterclass()
    {
        // Given
        $masterclass = Masterclass::factory(1)->create();
        Masterclass::addToPivotTable($masterclass);

        $user = User::factory(3)->create();

        // When
        foreach ($user->masterclasses as $subscriptions){
            return $count = $subscriptions->pivot->masterclass_id = $masterclass->id;
        }

        $actual = $this->assertDatabaseCount('masterclass_id', $count);
        $expected = 3;
        
        // Then
        $this->assertEquals($expected, $actual, "number of users subscribed");
    }

    public function test_check_all_masterclass_subscriptions_of_user()
    {
        // Given
        $masterclass = Masterclass::factory(3)->create();
        Masterclass::addToPivotTable($masterclass);

        $user = User::factory(1)->create();

        // When
        foreach ($masterclass->users as $subscriptors){
            return $count = $subscriptors->pivot->user_id = $user->id;
        }

        $actual = $this->assertDatabaseCount('user_id', $count);
        $expected = 3;

        // Then
        $this->assertEquals($expected, $actual, "number of subscriptions of user");
    } */

}
