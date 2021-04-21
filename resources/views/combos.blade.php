<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script src=" {{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src=" {{ asset('js/jquery-ui.js') }}"></script>

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <h2>Laravel-jquery</h2>
                <hr>
                <center>
                    <form name="alumno" action="{{ route('datos') }}" method="POST">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <td>Estados: </td>
                                <td>
                                    <select name="id_estado" id="select_estado">
                                        <option value="0">--Selecciona un Estado--</option>
                                        @foreach ($estados as $estado )
                                            <option value="{{ $estado->id_estado }}">{{ $estado->nombre }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Municipios: </td>
                                <td>
                                    <select name="id_municipio" id="select_municipio">
                                        <option value="0">-- Selecciona un Estado Antes --</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div id="info">-- -- -- -- --</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Salvar">
                                </td>
                            </tr>
                        </table>
                    </form>
                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){

                $('#select_estado').on('change', function(){
                    var id_estado = $(this).val();

                    if($.trim(id_estado) != '0'){
                        $.get('js02', {id_estado: id_estado}, function(municipios){
                            $('#select_municipio').empty();
                            $('#select_municipio').append("<option value='0'>--Seleccione un Municipio--</option>");
                            $.each(municipios, function(id, nombre){
                                $('#select_municipio').append("<option value='" + id + "'>" + nombre +"</option>");
                            });
                        })
                    }
                    else{
                        $('#select_municipio').empty();
                        $('#select_municipio').append("<option value='0'>--Seleccione un Estado Antes--</option>");
                    }
                });
            });
            //------------------------------------
            $('#select_municipio').on('change', function(){
                $('#info').html('');
                var id_municipio = $(this).val();

                if(id_municipio > 0){
                    $('#info').load('js02b?id_municipio=' + id_municipio).css({"background" : "#08C"})
                }
                else{
                    $("#info").html('');
                }
            });

        </script>
    </body>
</html>     