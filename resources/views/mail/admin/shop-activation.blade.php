@component('mail::message')
# Shop Actvation Request

Please activate shop. These are the shop details:

Shop Name : {{$shop->name}}<br>
Shop Owner : {{$shop->owner->name}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
