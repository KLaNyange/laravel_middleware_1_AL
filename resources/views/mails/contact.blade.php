<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com/"></script>
    <title>Document</title>
</head>

<body>
    <section>
        <h1 style="color: red; text-align:centerbh ;" class="font-bold text-2xl">you just received an email from {{ $email }}</h1>
        <article class="mt-8 text-gray-500 leading-7 tracking-wider">
            <p>Hi {{ config('app.name') }}</p>
            <p>{{ $text }}</p>
            <footer class="mt-12">
                <p>Thanks & Regards,</p>
                <p>{{ Auth::user()->name }}</p>
            </footer>
        </article>
    </section>
</body>

</html>


{{-- @component('mail::message')
# Hi

<p>{{ $text }}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}


