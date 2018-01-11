@extends('layouts.grid')

@section('title','index page')
@section('description','myDescription')
@section('keywords','myKeyWords')
@section('left')
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_summary,
    'side_block_classes' => NULL,
    'side_block_title'   => 'top 10 hosters',
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
    'side_block_title'   => 'top 10 hosters of ua',
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
    'side_block_title'   => 'top 10 hosters of ru',
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
    ['hosters'           => $top_hosters_by_kind_vps,
    'side_block_classes' => NULL,
    'side_block_title'   => 'top 10 hosters of vps',
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => 'button_caption',
    'button_link'        => 'button_link_url',
    'tooltip_title'      => 'hint vps',
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_kind_vds,
    'side_block_classes' => NULL,
    'side_block_title'   => 'top5 hosters of vds',
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => 'button_caption',
    'button_link'        => 'button_link_url',
    'tooltip_title'      => 'hint vds',
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_kind_vps_server,
    'side_block_classes' => NULL,
    'side_block_title'   => 'top5 hosters of vds server',
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => 'button_caption',
    'button_link'        => 'button_link_url',
    'tooltip_title'      => 'hint vds server',
    'tooltip_placement'  => 'right'
    ]
   ])
  @endcomponent
@endsection