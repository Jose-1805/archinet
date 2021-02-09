<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Archinet') }}</title>
    <link href="{{asset('MDB-Free/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('MDB-Free/css/mdb.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/helpers.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/global.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('DataTables-1.10.15/media/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/principal.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    @stack('css')
</head>

<body>
<div class="container-fluid">
     <!--<div class="barrasuperior">

    </div>
   
    <div class="row headerPrincipal full">

        <div class="logo-sena col-sm-3 d-none d-sm-block">
            <img class="logosena" src="{{asset('imagenes/logos/logo_sena.png')}}" alt="Logo sena"/>
            <div class="border-lado"></div>
        </div>
        <div class="titulo-principal col-sm-6">
            <P>PROTOTIPO PARA LA GESTIÓN DE HISTORIAS LABORALES</P>
        </div>
        <div class="logo-archinet col-sm-3 d-none d-sm-block">
            <img class="logoarchinet" src="//{{asset('imagenes/logos/logoarchinet.png')}}" alt="Logo arcinet"/>
        </div>
    </div> -->
     <div class="row">
        <div id="menu-1" class="col-12 col-md-4 col-lg-3 col-xl-2 grey lighten-5 border-right no-padding position-fixed z-depth-4" style="height: 100%;z-index: 1000;">
            @if(\Illuminate\Support\Facades\Auth::guest())
                @include('layouts.menus.no_autenticado')
            @else
                @include('layouts.menus.autenticado')
            @endif
        </div>

        @if(Auth::check())
            <div id="menu-2" class="d-none col-12 col-md-4 col-lg-3 col-xl-2 no-padding position-fixed" style="z-index: 1000;">
            @include('layouts.menus.autenticado',['opciones'=>false])
         </div>
        @endif

        <div class="col-12 d-md-none" style="min-height: 50px;"></div>

        <div class="col-12 col-md-8 col-lg-9 col-xl-10 offset-md-4 offset-lg-3 offset-xl-2 no-padding" style="min-height: 500px;">
            @yield('content')
        </div>
     </div>

    <div class="row">
        @include('layouts.secciones.footer')
    </div>
</div>

<div class="modal fade" id="modal-alert-danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-notify modal-danger" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title white-text" id="myModalLabel">Error</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-alert-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-notify modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title white-text" id="myModalLabel">Confirmación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="general_url" value="{{url('/')}}">
<input type="hidden" id="general_token" value="{{csrf_token()}}">

<!-- Scripts -->
<script> window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}; </script>
<script src="{{asset('MDB-Free/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/principal.js')}}" type="text/javascript"></script>
<script src="{{asset('MDB-Free/js/popper.min.js')}}"></script>
<script src="{{asset('MDB-Free/js/bootstrap.js')}}"></script>
<script src="{{asset('MDB-Free/js/mdb.js')}}"></script>
<script src="{{asset('js/blockUi.js')}}"></script>
<script src="{{asset('js/numeric.js')}}"></script>
<script src="{{asset('js/global.js')}}"></script>
<script src="{{asset('js/restrict_fields.js')}}"></script>
@stack('js')
</body>
</html>
</head>
