@extends('layouts.landing')

<div style="padding : 100px;">
<ul>
@foreach ($categories as $translation)
<li><a href="categories/{{$translation->id}}">{{ $translation->name }}</a></li>
@endforeach
</ul>
</div>