<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Welcome To CURD' }}</title>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
