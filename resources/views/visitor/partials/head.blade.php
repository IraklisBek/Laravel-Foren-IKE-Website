<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Foren @yield('title')</title>
<meta name="description" content="Automatic machines for foldable crates or boxes for fruits, cheese, mushrooms etc." />
<link rel="shortcut icon" href="/visitor/images/general/Favicon.png">


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75664760-1', 'auto');
    ga('send', 'pageview');

</script>
{{ Html::script('visitor/js/jquery.js') }}
{{ Html::style('visitor/css/bootstrap.min.css') }}
{{ Html::style('visitor/css/toastr.css') }}
{{ Html::script('visitor/js/toastr.js') }}
{{ Html::style('visitor/css/css.css') }}
{{ Html::script('visitor/js/login_register.js') }}

@yield('stylesheets')
