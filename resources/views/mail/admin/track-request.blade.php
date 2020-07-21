@component('mail::message')
# Tracking Order Request

Kindly confirm status for the above order:

<b>Email:</b> {{$trackorder->billing_email}}<br>
<b>Order Number:</b> {{$trackorder->order_no}}

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
