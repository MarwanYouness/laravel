@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.edit')}}</h1>

<ul>
@foreach ($categories as $translation)
<li><a href="{{$translation->id}}/edit">{{ $translation->name }}</a></li>
@endforeach
</ul>

@stop