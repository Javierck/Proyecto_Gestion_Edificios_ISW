<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro de Departamentos</title>
        {{ HTML::style('css/bootstrap.css'); }}
    </head>
    <body>
    				$depto->id = Input::get('id');
			$depto->bodega = Input::get('bodega');
			$depto->estacionamiento = Input::get('estacionamiento');
			$depto->gastos_Espe= Input::get('gastos_Espe');
			$depto->rut_Ed = Input::get('rut_Ed');
			$depto->rut_Prop = Input::get('rut_Prop');
			$depto->save();
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(array('url' => 'deptos')) }}
                        <legend>Registro</legend>
                        <div class="form-group">
                            {{ Form::label('bodega', 'Bodega') }}
                            {{ Form::text('bodega') }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('depto', 'Número de Departamento') }}
                            {{ Form::text('id')}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('estacionamiento', 'Estacionamiento') }}
                            {{ Form::text('estacinamiento')}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('gastos_Espe', 'gastos_Espe') }}
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
