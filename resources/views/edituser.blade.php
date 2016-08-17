@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.edit')}}</h1>

{!! Form::model($user,array('action' => 'UserController@update')) !!}
<div class="form-group">
{{ Form::hidden('id', $user->id) }}
{!! Form::label('name','Name')!!}
{!! Form::text('name',$user->name,['class'=> 'form-control' ])!!}
{!! Form::label('email','Email')!!}
{!! Form::text('email',$user->email,['class'=> 'form-control' ])!!}
{!! Form::label('password','Password')!!}
{!! Form::text('password',$user->password,['class'=> 'form-control' ])!!}
{!! Form::submit ('+')!!}
</div>
{!! Form::close() !!}

@stop