
<!DOCTYPE html>
<html lang="es">
    <head>
        {{-- Configuracion de la plantilla --}}
        <meta charset="UTF-8">
        <meta name="description" content="Página del Tecnológico Nacional de México/Campus Ciudad Hidalgo Michoacán">
        <link rel="shortcut icon" href="{{ asset('images/itsch.jpg') }}" style="filter:invert(1)">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="TecNM">
        <title>TECNM/CDHIDALGO</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        {{-- Links datatables --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.5/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sl-1.3.3/datatables.min.css"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- Styles -->
        {{--CSS Propios--}}
        <link href="{{asset('cssPropios/estilos.css')}}" rel="stylesheet">

        {{--Script para modificar el tamaño de la letra de la pagina--}}
        <script>
            var fontSize = 1;

            // funcion para aumentar la fuente
            function zoomIn() {
                fontSize += 0.1;
                document.body.style.fontSize = fontSize + "em";
            }

            // funcion para disminuir la fuente
            function zoomOut() {
                fontSize -= 0.1;
                document.body.style.fontSize = fontSize + "em";
            }

            //funcion que resetea la fuente de la pagina
            function zoomReset()
            {
                document.body.style.fontSize = ".9em";
            }

            //funcion de contraste de la pagina
            function contraste()
            {   var x = document.getElementsByTagName("a");
                var i;
                var col= document.body.style.backgroundColor;
                col=col.toString(16);
                if(col=="")
                {
                    document.body.style.backgroundColor='#000';
                    for (i = 0; i < x.length; i++) {
                      x[i].style.color = "red";
                    }
                }
                else
                {
                    document.body.style.backgroundColor='';
                    for (i = 0; i < x.length; i++) {
                      x[i].style.color = "";
                    }
                }
            }
        </script>
    </head>



    <body style="overflow-x: hidden;">

        {{--Menu de gobierno--}}
        @include('layouts.menu_gob')

        {{--Plantilla--}}
        @include('layouts.plantilla')

        <!--Incluir jQuery  -->
        <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>

        {{-- Scripts para dataTable --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script  src="https://cdn.datatables.net/v/ju/jq-3.6.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.5/fc-4.0.1/fh-3.2.0/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.0/datatables.min.js" defer></script>

        {{-- OCC Mundial --}}
        <script id = "bolsa-widget"
          type = "text/javascript"
          charset = "UTF-8"
          src = "https://jobdiscovery-widget-occ.occ.com.mx/button-bundle.js"
          key = "1b8v79xAa8DKqYCoM8k5ADxVrrs">
        </script>

        <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });

            // Prevent closing from click inside dropdown
            $(document).on('click', '.dropdown-menu', function (e) {
              e.stopPropagation();
            });

            // make it as accordion for smaller screens
            $('.menu-padre').on('click', function(e){
              if ($(window).width() > 599) return;
              e.preventDefault();
              e.stopPropagation();

              if($(this).next('.submenu').length){
                  $(this).next('.submenu').toggle();
              }

              $('.dropdown').on('hide.bs.dropdown', function () {
                $(this).find('.submenu').hide();
              });
            });

            //Cierra los mensajes emergentes
            $(document).ready(function(event){
                $('.mdshide').delay(3000).fadeOut(300);
            })
        </script>


        {{-- Seccion para los js --}}
        @yield('js')

    </body>

</html>
