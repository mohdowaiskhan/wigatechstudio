
<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body class="hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
   
    @include('includes.preloader')

 @include('includes.nav')


 @yield('content')


 @include('includes.waitloader')

 @include('includes.cursor')

 @include('includes.script')
  

@yield('js')
</body>
</html>