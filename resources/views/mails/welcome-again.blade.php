@component('mail::message')
# Welcome

Hi,

Thank you for registering on our website.

You can immediately start viewing blog posts by clicking the button below

@component('mail::button', ['url' => ''])
View Blog
@endcomponent

@component('mail::panel')
Remember, you get 10 free celebrity messages just for signing up!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
