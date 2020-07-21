<?php

namespace App;

use App\Notifications\OTPNotification;
use App\Order;
use App\ProductReview;
use App\Shop;
use App\TrackOrder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;

class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'cname', 'password', 'isVerified',
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

    public function review()
    {
        return $this->hasOne(ProductReview::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function trackorder()
    {
        return $this->hasMany(TrackOrder::class);
    }

}
