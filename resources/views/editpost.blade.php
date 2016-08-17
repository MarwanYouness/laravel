@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.edit')}}</h1>

{!! Form::model($post,array('action' => 'PostController@update')) !!}
<div class="form-group">
{{ Form::hidden('id', $post->id) }}
<select name="cat_id">
<option value=""></option>
    @foreach($categories as $category)
     <option <?php if($category->id == $post->cat_id){echo "selected";} ?> value="{{ $category->id }}">{{ $category->name}}</option>
    @endforeach
</select>
{!! Form::label('name','Name')!!}
{!! Form::text('name',$post->name,['class'=> 'form-control' ])!!}
{!! Form::label('desc','Desc')!!}
{!! Form::textarea('desc',$post->desc,['class'=> 'form-control' ])!!}
{!! Form::submit ('+')!!}
</div>
{!! Form::close() !!}

@stop