<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce Laravel</title>

          @include('layout.partial.styles')
</head>

<body>

<div class="wrapper">

            @include('layout.partial.nav')

   @yield('content')

             @include('layout.partial.footer')

</div>

              @include('layout.partial.scripts')


</body>
</html>