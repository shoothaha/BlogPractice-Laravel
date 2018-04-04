<!doctype html>
<html lang="en">

    <head>@include('blogviews.partials._header')</head>

    <body>

        @include('blogviews.partials._nav')

        <div class="container">

            @include('blogviews.partials._messages')       
            
            @yield('content')

            @include('blogviews.partials._footer')

        </div>  <!-- end of container -->

        @include('blogviews.partials._javascripts')

        @yield('script')

    </body>
</html>