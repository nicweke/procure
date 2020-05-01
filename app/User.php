<?php

namespace App;

use App\Notifications\OTPNotification;
use App\Shop;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'cname', 'password', 'isVerified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function OTP()
    {
        return Cache::get($this->OTPKey());
    }

    public function OTPKey()
    {
        return "OTP_for_{$this->id}";
    }

    public function cacheTheOTP()
    {
        $OTP = rand(100000, 999999);
        Cache::put([$this->OTPKey() => $OTP], now()->addSeconds(60));
        return $OTP;
    }

    public function sendOTP($via)
    {
        $OTP = $this->cacheTheOTP();
        $this->notify(new OTPNotification($via, $OTP));
    }

    public function routeNotificationForKarix()
    {
        return $this->phone;
    }

    public function shop()
    {
        return $this->hasOne(Shop::class);
    }
}
