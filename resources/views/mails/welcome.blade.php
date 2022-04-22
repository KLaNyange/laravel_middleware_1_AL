@component('mail::message')
# Hi 

Thank you for your sign up

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
