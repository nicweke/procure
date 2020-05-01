<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;
use App\Notifications\OTPNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{ use DatabaseMigrations;




    public function it_has_cache_key_for_otp()
    {
        $user = factory(User::class)->create();
        $this->assertEquals($user->OTPKey(), 'OTP_for_1');
    }
    public function it_can_send_otp_notification_to_the_user()
    {
       $user = factory(User::class)->create();
       Notification::fake();
       $user->sendOTP('email');
       Notification::assertSentTo([$user], OTPNotification::class);
    }
}
