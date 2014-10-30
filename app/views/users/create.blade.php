<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro de Usuarios</title>
        {{ HTML::style('css/bootstrap.css'); }}
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(array('url' => 'users')) }}
                        <legend>Registro</legend>
                        <div class="form-group">
                            {{ Form::label('usuario', 'Nombre') }}
                            {{ Form::text('real_name') }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('rut', 'Rut') }}
                            {{ Form::text('id')}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password', 'Contraseña') }}
                            {{ Form::text('password')}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email')}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('user_Type', 'Tipo de Usuario') }}
                            {{ Form::text('user_Type') }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('cellphone', 'Celular') }}
                            {{ Form::text('cellphone') }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('date', 'Fecha Nacimiento') }}
                            {{ Form::text('date') }}
                        </div>
                        
                        {{ Form::submit('Registrar') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('js/bootstrap.js'); }}
    </body>
</html>
