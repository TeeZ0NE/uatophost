<div class="{{ $side_block_classes }}">
  <p class="text-center {{ $header_class }}">{{ $side_block_title }}</p>
  <ol>
    @foreach ($hosters as $hoster)
    <li><a href="{{ url("hosters/".$hoster->url_slug) }}">{{ $hoster->name }}</a></li>

    @endforeach
  </ol>
  <p class="text-center">
    <a href="{{ url($button_param['button_link']) }}" class="px-2" 
  {{-- does it have hint(tooltip)? --}}
  @if (isset($button_param['tooltip_title']) and !empty($button_param['tooltip_title']))
  data-toggle="tooltip"
  data-placement="{{$button_param['tooltip_placement'] or 'bottom'}}"
  title="{{$button_param['tooltip_title']}}"
  @endif>
  {{ $button_param['button_caption'] }}
</a>
  </p>
</div>