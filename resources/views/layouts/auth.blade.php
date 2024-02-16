<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap 5 : Start --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"">
    {{-- Bootstrap 5 : End --}}

    {{-- Custom CSS : Start --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    {{-- Custom CSS : End --}}

    <title>@yield('title')</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    {{-- Content : Start --}}
    @yield('content')
    {{-- Content : End --}}

    {{-- Bootstrap 5 JavaScript : Start --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Bootstrap 5 JavaScript : End --}}

</body>

</html>
