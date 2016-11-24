<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Procedimientos Quirurgicos</title>

        

        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet">
        
        <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
    </head>
    <body>
    @if(isset($ce))
<div class="results">
    
    <tbody>
    @foreach ($ce as $value)
        <tr>
            <td>{{$value->id_categorias}}</td>
            <td>{{$value->categoria}}</td>
        </tr>
        <br>
    @endforeach
    </tbody>

</div>
    @endif
    @yield('content')
    <!-- Scripts -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>