<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>


    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-center justify-center min-h-screen bg-slate-900 sm:items-center sm:pt-0">
        <div class="max-w-xl mx-auto sm:px-6 bottom-16 lg:px-8">
            <div class="flex items-center my-4 sm:my-12 pt-8 sm:justify-center sm:pt-0">
                <a href="{{ route('home') }}"><img src="{{ url('storage/img/lif_tattoo_logo_slate_900.jpg') }}" alt="Lif Tattoo Logo" title="Lif Tattoo" /></a>
            </div>
            <div class="flex items-center pt-0 justify-center sm:pt-0">
                <div class="px-4 text-lg text-slate-500  font-semibold border-r border-slate-800 tracking-wider">
                    @yield('code')
                </div>
                <div class="flex-wrap justify-start">
                    <div class="  ml-4 text-lg font-semibold text-slate-500 uppercase tracking-wider">
                        @yield('message')
                    </div>
                    <div class=" ml-4 text-lg font-bold text-yellow-100 hover:text-orange-200  uppercase tracking-wide ">
                        <a href="{{ route('home') }}">
                            <div>@yield('content')</div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>