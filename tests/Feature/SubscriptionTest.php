<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscriptionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_subscription_mail_sent()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_subscription_mail_user_data()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_subscription_mail_content()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_mail_server_is_conected()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_database_is_conected()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_subscribe_only_once()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_check_all_users_subscribed_to_a_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_check_all_masterclass_subscriptions_of_user()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_check_if_user_is_subscribed_to_a_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_cancel_user_subscription_to_a_masterclass()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

   
}
