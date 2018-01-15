<?/**
 * side_block_classes classes which using with main block of raitings
 * side_block_title title of block
 * header_class caption of block
 * button_param Array 
 * button_link - url of button, etc. see more
 * tooltip_placement - where is tooltip (bottom, top-center, right)
 * tooltip_title - text of hint
 * button_caption - caption on the button
 */?>
<div class="{{ $side_block_classes }}">
  <p class="text-center {{ $header_class }}">{{ $side_block_title }}</p>
  <ul>
    @foreach ($hosters as $hoster)
    <li><a href="{{ url("hosters/".url_slug($hoster->name, ["transliterate"=>true])) }}">{{ $hoster->name }}</a></li>

    @endforeach
  </ul>
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