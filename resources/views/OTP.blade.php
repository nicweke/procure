@component('mail::message')
# OTP verification

Hello,

Your OTP code is <strong>{{$OTP}}</strong>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
