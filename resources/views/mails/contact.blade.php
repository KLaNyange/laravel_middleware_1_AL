<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <section>
        <h1 class="font-bold text-2xl">you just received an email from {{ $email }}</h1>
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
