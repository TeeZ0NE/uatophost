@extends('layouts.grid')

@section('title','hoster info page')
@section('description','myDescription to hoster info')
@section('keywords','myKeyWords to hoster info')
@section('main_content')

<h1>top hosters</h1>
@empty ($hosters[0])
@component('layouts.parts.components.alert',[
  'error_text'=>'Nothing found',
  'error_class'=>'warning'
  ])
  @endcomponent
  @endempty
  <ol>
  @foreach ($hosters as $hoster)
  <li>
    <a href="{{ url('hosters/'.$hoster->url_slug) }}" class="d-inline-block m-2">{{ $hoster->name }}  <span class="badge badge-secondary">{{ $hoster->rait }}</span></a>
  </li>
  @endforeach
</ol>
  @endsection