@component('mail::message')
# Your Order 

Thank you for using our services.<br>
We have received your order and are working round the clock to fulfill it. <br>
Attached, please find your delivery details and order information.
To check for the status of your order, kindly go to the Track Order section on the site and follow the prompts to receive the status of your order.

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
