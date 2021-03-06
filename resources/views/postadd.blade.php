@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.add')}}</h1>

{!! Form::open(array('action' => 'PostController@store')) !!}
<div class="form-group">
<select name="cat_id">
<option value=""></option>
    @foreach($categories as $category)
     <option value="{{ $category->id }}">{{ $category->name}}</option>
    @endforeach
</select>
<br/>
{!! Form::label('ar_name','Arabic Name')!!}
{!! Form::text('ar_name',null,['class'=> 'form-control' ])!!}
{!! Form::label('en_name','English Name')!!}
{!! Form::text('en_name',null,['class'=> 'form-control' ])!!}
{!! Form::label('ar_desc','Arabic Description')!!}
{!! Form::textarea('ar_desc',null,['class'=>'form-control'])!!}
{!! Form::label('en_desc','English Description')!!}
{!! Form::textarea('en_desc',null,['class'=>'form-control'])!!}
{!! Form::submit ('+')!!}
</div>
{!! Form::close() !!}

@stop