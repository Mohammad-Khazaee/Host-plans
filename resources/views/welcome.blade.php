<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="text-center pt-5 container mt-5 bg-light rounded" style="height: 200px;">login and then create new host plan & host table</div>
        <div class="container">
            <div class="row">
                @foreach ($host as $ho)    
                <div class="scol" style="width:100%; max-width: 500px !important;">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{$ho->name}}</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @empty(!$ho->Host_detail)
                                
                                @foreach ($ho->Host_detail as $h)
                                <tr>
                                    <th scope="row">{{$h->HostAttributekey}}</th>
                                    <td>{{$h->HostAttributeValue}}</td>
                                </tr>
                                @endforeach
                                
                                @endempty
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
