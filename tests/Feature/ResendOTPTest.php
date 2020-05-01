<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Tests\Feature\ResendOTP;
use Illuminate\Support\Facades\Cache;
use App\Notifications\OTPNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ResendOTPTest extends TestCase
{
    use DatabaseMigrations;

    public function a_user_can_request_for_new_otp()
    {
    $user = $this->logInUser();
       $this->get('/verifyOTP');
       $response = $this->post('/resend_otp', ['via' => 'email']);
       $response->assertRedirect('/verifyOTP');
    }

    public function an_otp_notification_is_sent_when_user_requests_for_new_otp()
    {
        Notification::fake();
        $user = $this->logInUser();
        $response = $this->post('/resend_otp', ['via' => 'email']);
        Notification::assertSentTo([$user], OTPNotification::class);
    }


    
}
