@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.add')}}</h1>

{!! Form::open(array('action' => 'CategoriesController@store')) !!}
<div class="form-group">
{!! Form::label('slug','Slug')!!}
{!! Form::text('slug',null,['class'=> 'form-control' ])!!}
{!! Form::label('ar_name','Arabic Name')!!}
{!! Form::text('ar_name',null,['class'=> 'form-control' ])!!}
{!! Form::label('en_name','English Name')!!}
{!! Form::text('en_name',null,['class'=> 'form-control' ])!!}
{!! Form::submit ('+')!!}
</div>
{!! Form::close() !!}

@stop