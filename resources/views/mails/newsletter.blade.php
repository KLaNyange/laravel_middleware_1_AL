@component('mail::message')
# Thanks

You will now receive the newsletter

@component('mail::button', ['url' => ''])
Tip me
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
