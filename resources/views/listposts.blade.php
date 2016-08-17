@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.edit')}}</h1>

<ul>
@foreach ($posts as $post)
<li><a href="{{ $post->id }}/edit">{{ $post->name }}</a></li>
@endforeach
</ul>

@stop