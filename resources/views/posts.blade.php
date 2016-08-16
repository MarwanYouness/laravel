@extends('layouts.landing')


<div style="padding:100px;">
@foreach($posts as $post)
<h3>{{$post->name}}</h3>
<p>{{str_limit($post->desc, 20,'.....')}}</p>
<a href="/posts/{{$post->id}}">{{trans('adminlte_lang::message.readmore')}}</a>
	@endforeach
	</div>