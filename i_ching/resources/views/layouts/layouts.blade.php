<html>
    <!DOCTYPE html>
    <html lang="ja">
  
    <head>
        <title>@yield('i_ching')</title>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/i_ching.css') }}" rel="stylesheet">
       
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>
        @component('components.footer')
        @endcomponent
        

         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html> 