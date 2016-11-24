<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Procedimientos Quirurgicos</title>

        

        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet">
        
        <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        </script>

        <script type="text/javascript">$(document).ready(function () {
            var categorias = [];
        $('input[name="cat[]"]').on('change', function (e) {

        e.preventDefault();
        categorias = []; // reset 

        $('input[name="cat[]"]:checked').each(function()
        {
            categorias.push($(this).val());
        });            
        //alert( "Data Loaded: " + categorias );
        $.post('resultadosbusqueda', {categorias: categorias}, function(ejemplo)
        {
            $('#results').html(ejemplo);
        });
    });

});</script>
    </head>
    <body>
<div class="superior">
<center><h1>Demostracion</h1></center>
    <form method="get">
    <br>
    <div class="checkbox checkbox-danger">
        <input type="checkbox" name="cat[]" id="cat1" value="1">
        <label for="cat1" class='cat-check'>Valor 1 Categoria</label>
    </div>
    <div class="checkbox checkbox-danger">
        <input type="checkbox" name="cat[]" id="cat2" value="2">
        <label for="cat2" class='cat-check'>Valor 2 Categoria</label>
    </div>
    <div class="checkbox checkbox-danger">
        <input type="checkbox" name="cat[]" id="cat3" value="3">
        <label for="cat3" class='cat-check'>Valor 3 Categoria</label>
    </div>
    <br>
    </form> 

      
</div>
    @yield('content')
    <!-- Scripts -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>
