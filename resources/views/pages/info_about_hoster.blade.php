@extends('layouts.grid')

@section('title','hoster info page')
@section('description','myDescription to hoster info')
@section('keywords','myKeyWords to hoster info')
@section('main_content')

@if (isset($error_text))
  @component('layouts.parts.components.alert',[
    'error_text'=>$error_text,
    'error_class'=>$error_class
  ])
  @endcomponent
@else
 <table class="table">
  <thead>
    <tr>
      <th>name</th>
      <th>value</th>
    </tr>
  </thead>
  <tbody>
    <tr><th scope="row">name</th><td>{{ $hoster_main_info->name }}</td></tr>
    <tr><th scope="row">site</th><td>{{ $hoster_main_info->site }}</td></tr>
    <tr><th scope="row">logo</th><td>{{ $hoster_main_info->logo }}</td></tr>
    <tr><th scope="row">joined</th><td>{{ $hoster_main_info->joined }}</td></tr>
    <tr><th scope="row">raiting</th><td>{{ $raiting }}</td></tr>
    <tr><th scope="row">where hoster from</th><td>{{ $region }}</td></tr>
    <tr><th scope="row">Locations</th>
      <td>
        @foreach ($locations as $region => $cities)
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-primary">
            {{ $region }}
            <span class="badge badge-primary badge-pill">{{ count($cities) }}</span>
          </li>
          @foreach ($cities as $city)
          <li class="list-group-item">{{ $city }}</li>
          @endforeach
        </ul>
        @endforeach
      </td>
    </tr>
    <tr><th scope="row">Types (tariff name's) and type of hosting's</th>
      <td>
        @foreach ($types_kinds as $type_kind)
        <strong>
          <a href="{{ url("hosters/".$hoster_main_info->url_slug."/".$type_kind->hosting_tarif_url_slug) }}">
            {{ $type_kind->name }}
          </a>
        </strong> 
        <small><a href="{{ url("wiki/".$type_kind->wiki_url_slug) }}">({{ $type_kind->caption }})</a></small><br>
      @endforeach</td>
    </tr>
    <tr><th scope="row">Promotions</th>
      <td>
        <ul class="list-group">
          @foreach ($promotions as $promotion)
            <li class="list-group-item text-right"># - {{ $promotion->id }}</li>
            <li class="list-group-item list-group-item-primary">{{ $promotion->title }}</li>
            <li class="list-group-item">Text - {{ $promotion->promo_text }}</li>
            <li class="list-group-item">Start - {{ $promotion->promo_start }}</li>
            <li class="list-group-item">End - {{ $promotion->promo_end }}</li>
          @endforeach
        </ul>
      </td>
    </tbody>

  </table>
@endif


  @endsection