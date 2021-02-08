<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<p>Nouveau message</p>
<ul>
    <li>Nom/Prénom :  {{ $first_name }} {{ $last_name }}</li>
    <li>Email : {{ $email }}</li>
</ul>
<p>Message : {{ $msg }}</p>
</body>

</html>
