<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema Lego</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>
<footer id="footer" class="text-center">
    <p></p>
</footer>
</body>
</html>