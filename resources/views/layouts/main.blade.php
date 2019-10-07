<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>

    <body>
        <div id="app">
            @include('partials._nav')

            @yield('banner')

            <div class="container pagecontent" style="">
                @include('partials._messages')

                @yield('content')

                @include('partials._footer')
            </div> <!-- end of .container -->

        </div>

        @include('partials._javascript')
    </body>
</html>