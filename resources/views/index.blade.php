@extends('layouts.grid')

@section('title','index page')
@section('description','myDescription')
@section('keywords','myKeyWords')
@section('left')
@component('layouts.parts.components.side_block_rate',
['hosters'           => $top_hosters_summary,
'side_block_classes' => NULL,
'side_block_title'   => 'top hosters',
'header_class'       => 'top-of-raitings',
'button_param'       => [
'button_caption'     => 'button_caption',
'button_link'        => 'button_link_url',
'tooltip_title'      => 'hint',
'tooltip_placement'  => 'right'
]
])
@endcomponent

@component('layouts.parts.components.side_block_rate',
['hosters'           => $top_hosters_by_region_uk,
'side_block_classes' => NULL,
'side_block_title'   => 'top hosters of ua',
'header_class'       => 'top-of-raitings',
'button_param'       => [
'button_caption'     => 'button_caption',
'button_link'        => 'button_link_url',
'tooltip_title'      => 'hint',
'tooltip_placement'  => 'right'
]
])
@endcomponent
@component('layouts.parts.components.side_block_rate',
['hosters'           => $top_hosters_by_region_ru,
'side_block_classes' => NULL,
'side_block_title'   => 'top hosters of ru',
'header_class'       => 'top-of-raitings',
'button_param'       => [
'button_caption'     => 'button_caption',
'button_link'        => 'button_link_url',
'tooltip_title'      => 'hint',
'tooltip_placement'  => 'right'
]
])
@endcomponent
  
@endsection