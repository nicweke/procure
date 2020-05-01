<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;


    public function after_login_user_cannot_access_home_page_until_verified()
    {
        $this->logInUser();
        $this->get('/home')->assertRedirect('/verifyOTP');
    }

    public function after_login_user_can_access_home_page_if_verified()
    {
        $this->logInUser(['isVerified' => 1]);
        $this->get('/home')->assertStatus(200);
    }
}
