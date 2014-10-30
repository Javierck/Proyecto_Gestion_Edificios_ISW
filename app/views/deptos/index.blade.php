<?php $estado=Session::get('estado'); ?>

@if($estado == 'ok')
	El departamento se registro con exito<br>
@endif

@foreach($deptos as $depto)

<li><a href="{{ route('deptos.show', $depto->id)}}">
	{{$depto ->rut_Prop}}</a></li>

@endforeach
