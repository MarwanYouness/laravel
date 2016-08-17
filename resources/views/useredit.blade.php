@extends('layouts.app')

@section('main-content')
	<h1>{{trans('adminlte_lang::message.edit')}}</h1>

<ul>
@foreach ($users as $user)
<li><a href="{{$user->id}}/edit">{{ $user->name }}</a></li>
@endforeach
</ul>

@stop