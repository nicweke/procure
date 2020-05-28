@component('mail::message')
# Customer Quotation Request

Kindly send a quotation for the following:


Product Name : {{$quote->name}}<br>
Product Quantity: {{$quote->quantity}}<br>
Company Name: {{$quote->company}}<br>
Company Email: {{$quote->email}}<br>
Inquiry: {{$quote->inquiry}}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
