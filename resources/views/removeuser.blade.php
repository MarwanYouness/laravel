@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.delete')}}</h1>

<ul>
@foreach ($users as $translation)
<li><a href="{{$translation->id}}/delete">{{ $translation->name }}</a></li>
@endforeach
</ul>

@stop