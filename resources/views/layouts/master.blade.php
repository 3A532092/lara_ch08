<!DOCTYPE html>
<html>
    <head>
        <title>@yeild('title')</title>
        @section('head')
            @include('partials.head')
        @show
    </head>
    <body>
        @include('partials.nav')
        <div class="container">
            @yeild('content')
        </div>
    </body>
</html>