<!DOCTYPE html>
<html lang="en">
<head>
    @include('visitor.partials.head')
</head>

<body>
@include('visitor.partials.nav')

<div class="container" style="width:100%;">
    @include('visitor.partials.messages')

    @yield('content')


</div>

@include('visitor.partials.footer')

@include('visitor.partials.scripts')
@yield('scripts')
</body>

</html>
