@component('mail::message')
# Shop Actvation Request

Please activate shop. These are the shop details:

Shop Name : {{$shop->name}}<br>
Shop Owner : {{$shop->ownername}}<br>
Shop Email Address : {{$shop->email}}<br>
Shop Telephone : {{$shop->tel}}<br>
Shop Core Business : {{$shop->specialization}}


@component('mail::button', ['url' => url('/admin/shops')])
Manage Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
