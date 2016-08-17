@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.add')}}</h1>

{!! Form::open(array('action' => 'UserController@store')) !!}
<div class="form-group">
{!! Form::label('ar_name','Arabic Name')!!}
{!! Form::text('ar_name',null,['class'=> 'form-control' ])!!}
{!! Form::label('en_name','English Name')!!}
{!! Form::text('en_name',null,['class'=> 'form-control' ])!!}
{!! Form::label('email','Email')!!}
{!! Form::text('email',null,['class'=> 'form-control' ])!!}
{!! Form::label('password','Password')!!}
{!! Form::text('password',null,['class'=> 'form-control' ])!!}
{!! Form::submit ('+')!!}
</div>
{!! Form::close() !!}

@stop