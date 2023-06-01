<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f02b2b" />
    <meta name='revisit-after' content='2 days' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="robots" content="noodp,index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content>
    <title>EUNOIA </title>
    <meta name="keywords" content="Eunoia by AN, thời trang trẻ em cao cấp, váy thiết kế, kid fashion design" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="EUNOIA">
    <meta property="og:image" content="{{asset('assets/theme.hstatic.net/200000685745/1001041408/14/share_fb_home6704.jpg?v=44')}}">
    <meta property="og:image:secure_url"
        content="{{asset('assets/theme.hstatic.net/200000685745/1001041408/14/share_fb_home6704.jpg?v=44')}}">

    <meta property="og:description" content>
    <meta property="og:url" content="{{route('home')}}">
    <meta property="og:site_name" content>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.web.default.header_css')
    @stack('hcss')
    <script>
        const CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

</head>

<body id="template-index">
    @include('layouts.web.default.loader')
    @include('layouts.web.default.header')
    @yield('content')
    @include('layouts.web.default.footer')
    @include('layouts.web.default.footer_js')
    @stack('fjs')
</body>

</html>
