@extends('layouts.landing')

<div style="padding:100px;">
<img src="data:image/jpeg ;base64, {{ base64_decode($post->image) }}" />

<h1>{{ $post->name }}</h1>
<p>{{ $post->desc }}</p>

</div>