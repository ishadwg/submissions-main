<!doctype html>
<title>{{ config('app.name') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-200 font-sans">

    <x-navbar></x-navbar>

    <x-header></x-header>

    @yield('content')

    <x-footer></x-footer>

</body>

</html>
