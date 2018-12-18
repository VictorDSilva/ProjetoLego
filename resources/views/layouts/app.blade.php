<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema Lego</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.7/css/mdb.min.css" />--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-select.min.css') }}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="{{ URL::asset('js/i18n/defaults-pt_BR.min.js') }}"></script>

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
