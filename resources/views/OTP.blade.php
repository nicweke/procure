@component('mail::message')
# Verify Your Login

Hello,

Below is your One Time Passcode:

<strong>{{$OTP}}</strong>

Incase of any issues or concerns, kindly send an email to support@procure.com, we will get back to you.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
