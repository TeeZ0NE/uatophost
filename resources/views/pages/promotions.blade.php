@extends('layouts.grid')

@section('title','Hoster\'s promotions')
@section('description','myDescription to hoster promotions')
@section('keywords','myKeyWords to hoster promotions')
@section('main_content')

<h1>Promotions</h1>
<table class="table table-striped">
  <tbody>
    @foreach ($all_promotions as $promotion)
    <tr class="table-primary">
      <td colspan="2" class="text-center">{{ $promotion->promo_title }}</td>
    </tr>
    <tr>
      <td colspan="2">{{ $promotion->promo_text }}</td>
    </tr>
    <tr>
      <td rowspan="2">
        <a href="{{ url("hosters/".$promotion->hoster_url_slug) }}">
          {{ $promotion->hoster_name}}
        </a>
      </td>
      <td class="text-lg-right">{{ $promotion->promo_start }}</td>
    </tr>
    <tr>
      <td class="text-lg-right">{{ $promotion->promo_end }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection