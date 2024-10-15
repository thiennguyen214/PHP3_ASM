<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>Panpie</title>
    <meta name='robots' content='max-image-preview:large' />
    <noscript>
        <style>
            #preloader {
                display: none;
            }
        </style>
    </noscript>

    @yield('css')
    @yield('js')
    @include('client.layouts.partials.css')
    @include('client.layouts.partials.js')
</head>

<body class="@yield('body')">

    <div id="page" class="site">
        <!--#content-->
        @include('client.layouts.partials.header')

        <div id="header-area-space"></div>

        <!--#content-->
        @yield('content')

        <!--#footer-->
        @include('client.layouts.partials.footer')
    </div>

    @include('client.layouts.partials.jsfooter')
    @yield('jsft')


</body>

</html>
