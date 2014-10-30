<?php $estado=Session::get('estado'); ?>

@if($estado == 'ok')
	El usuario se registro con exito<br>
@endif

@foreach($users as $user)

<li><a href="{{ route('users.show', $user->id)}}">
	{{$user ->real_name}}</a></li>

@endforeach
