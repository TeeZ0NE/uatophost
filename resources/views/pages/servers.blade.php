@extends('layouts.grid')

@section('title','Servers')
@section('description','myDescription to servers info')
@section('keywords','myKeyWords to servers info')
@section('main_content')

<h1>VPS VDS servers</h1>
{{-- nav --}}
<ul class="nav nav-tabs" id="servers_tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="vps-tab" data-toggle="tab" href="#vps" role="tab" aria-controls="vps" aria-selected="true">vps servers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="vds-tab" data-toggle="tab" href="#vds" role="tab" aria-controls="vds" aria-selected="false">vds servers</a>
  </li>
</ul>
{{-- /nav --}}
{{-- content --}}
<div class="tab-content" id="servers_contents">
  {{-- vps content --}}
  <div class="tab-pane fade show active" id="vps" role="tabpanel" aria-labelledby="home-tab">
    @empty ($vps_servers[0])
    @component('layouts.parts.components.alert',[
      'error_text'=>'Nothing found',
      'error_class'=>'warning'
      ])
      @endcomponent
      @endempty
      <ol>
      @foreach ($vps_servers as $vps_server)
      <li>
        <a href="{{ url('hosters/'.$vps_server->url_slug) }}" class="d-inline-block m-2">{{ $vps_server->name }}  <span class="badge badge-secondary">{{ $vps_server->rait }}</span></a>
      </li> 
      @endforeach
    </ol>
    </div>
    {{-- /vps content --}}
    {{-- vds content --}}
    <div class="tab-pane fade" id="vds" role="tabpanel" aria-labelledby="profile-tab">
      @empty ($vds_servers[0])
      @component('layouts.parts.components.alert',[
        'error_text'=>'Nothing found',
        'error_class'=>'warning'
        ])
        @endcomponent
        @endempty
        <ol>
      @foreach ($vds_servers as $vds_server)
      <li>
        <a href="{{ url('hosters/'.$vds_server->url_slug) }}" class="d-inline-block m-2">{{ $vds_server->name }}  <span class="badge badge-secondary">{{ $vds_server->rait }}</span></a>
      </li> 
      @endforeach
    </ol>
      </div>
      {{-- /vds content --}}

    </div>
    {{-- /content --}}
    @endsection