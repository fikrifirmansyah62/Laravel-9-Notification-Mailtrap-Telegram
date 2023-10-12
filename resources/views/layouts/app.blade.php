<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- css bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

{{-- Header --}}
    @include('layouts.app.header')
{{-- End Header --}}
<div class="container">

{{-- Content --}}
    @yield('content')
{{-- End Content --}}

{{-- Footer --}}
    @include('layouts.app.footer')
{{-- End Footer --}}
</div>
{{-- js bootstrap --}}
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>