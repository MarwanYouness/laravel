@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.edit')}}</h1>

{!! Form::model($category,array('action' => 'CategoriesController@update')) !!}
<div class="form-group">
{{ Form::hidden('id', $category->id) }}
{!! Form::label('slug','Slug')!!}
{!! Form::text('slug',$category->slug,['class'=> 'form-control' ])!!}
{!! Form::label('name','Name')!!}
{!! Form::text('name',$category->name,['class'=> 'form-control' ])!!}
{!! Form::submit ('+')!!}
</div>
{!! Form::close() !!}

@stop