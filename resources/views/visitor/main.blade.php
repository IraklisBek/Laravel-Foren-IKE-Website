<!DOCTYPE html>
<html lang="en">
<head>
    @include('visitor.partials.head')
</head>

<body>
@include('visitor.partials.nav')
@if(!Auth::check())
    @include('visitor.auth.login')
    @include('visitor.auth.register')
@endif
<div style="position:fixed; margin-top:15%;">
    @include('visitor.partials.messages')
</div>

<div class="container" style="width:100%;">
    @yield('content')


</div>

@include('visitor.partials.footer')

@include('visitor.partials.scripts')
@yield('scripts')
</body>

</html>
