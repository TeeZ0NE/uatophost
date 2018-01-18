@extends('layouts.grid')

@section('title','hoster info page')
@section('description','myDescription to hoster info')
@section('keywords','myKeyWords to hoster info')
@section('main_content')

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
        <ul>
          @foreach ($locations as $region => $cities)
          <li> <ul>
            <strong>{{ $region }}</strong>
            @foreach ($cities as $city)
            <li>{{ $city }}</li>
            @endforeach
          </ul></li>
          @endforeach
        </ul>
      </td>
    </tr>
  </tbody>

</table>




@endsection