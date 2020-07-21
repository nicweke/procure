@component('mail::message')

# Shop Activation

Congratulations,

Your Shop is now active.

To visit your shop admin site, follow the following steps:

1. Go to the Procure Home page by inserting procure.com on the url or clicking the procure logo at the top of the page.

2. In the URL section of the web browser, infront of the procure.com insert /admin

3. You will be redirected to admin site

4. Enter your user account login credentials.

5. Finally, you receive the power to sell and grow your business.


Enjoy your experience with Procure.

<!--@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visit Your Shop
@endcomponent-->



Sincerely,<br>
{{ config('app.name') }} Team
@endcomponent
