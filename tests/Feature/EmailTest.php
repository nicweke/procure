<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use App\Notifications\OTPNotification;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmailTest extends TestCase
{
    use DatabaseMigrations;
    public $user;

    public function setup()
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        
    }

    public function an_otp_email_is_sent_when_user_is_logged_in()
    {
        
        
       Notification::fake();
       $res = $this->post('/login', ['email' => $this->user->email, 'password'=>$this->user->password, 'via'=>'email']);
       Notification::assertSentTo([$this->user],OTPNotification::class);
    }

    public function an_otp_email_not_sent_when_credentials_are_incorrect()
    {
          
       Mail::fake();
       
       $this->withExceptionHandling();
       $res = $this->post('/login', ['email' =>$this->user->email, 'password'=>'qrfafafadasd']);
      
       Mail::assertNotSent(OTPMail::class);

    }
    public function otp_is_stored_in_cache_for_the_user()
    {
        
        $res = $this->post('/login', ['email' =>$this->user->email, 'password'=>$this->user->password]);
        $this->assertNotNull($this->user->OTP());
      

    }


}
