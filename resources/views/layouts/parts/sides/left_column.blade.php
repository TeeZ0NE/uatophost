
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_summary,
    'side_block_classes' => NULL,
    'side_block_title'   => __('blockHeaders.top_hosters_summary',['num_of_hosters'=>10]),
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => __('buttons.goto_hosting_rate'),
    'button_link'        => 'button_link_url',
    'tooltip_title'      => __('buttons.hint_goto_hosting_rate'),
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent

  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_region_uk,
    'side_block_classes' => NULL,
    'side_block_title'   => __('blockHeaders.top_hosters_by_region_uk',['num_of_hosters'=>10]),
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => __('buttons.goto_hosting_rate'),
    'button_link'        => 'button_link_url',
    'tooltip_title'      => __('buttons.hint_goto_hosting_rate'),
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_region_ru,
    'side_block_classes' => NULL,
    'side_block_title'   => __('blockHeaders.top_hosters_by_region_ru',['num_of_hosters'=>10]),
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => __('buttons.goto_hosting_rate'),
    'button_link'        => 'button_link_url',
    'tooltip_title'      => __('buttons.hint_goto_hosting_rate'),
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_kind_vps,
    'side_block_classes' => NULL,
    'side_block_title'   => __('blockHeaders.top_hosters_by_kind_vps',['num_of_hosters'=>10]),
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => __('buttons.goto_hosting_rate'),
    'button_link'        => 'button_link_url',
    'tooltip_title'      => __('buttons.hint_goto_hosting_rate'),
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_kind_vds,
    'side_block_classes' => NULL,
    'side_block_title'   => __('blockHeaders.top_hosters_by_kind_vds',['num_of_hosters'=>5]),
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => __('buttons.goto_hosting_rate'),
    'button_link'        => 'button_link_url',
    'tooltip_title'      => __('buttons.hint_goto_hosting_rate'),
    'tooltip_placement'  => 'right'
    ]
    ])
  @endcomponent
  @component('layouts.parts.components.side_block_rate',
    ['hosters'           => $top_hosters_by_kind_vps_server,
    'side_block_classes' => NULL,
    'side_block_title'   => __('blockHeaders.top_hosters_by_kind_vps_server',['num_of_hosters'=>5]),
    'header_class'       => 'top-of-raitings',
    'button_param'       => [
    'button_caption'     => __('buttons.goto_hosting_rate'),
    'button_link'        => 'button_link_url',
    'tooltip_title'      => __('buttons.hint_goto_hosting_rate'),
    'tooltip_placement'  => 'right'
    ]
   ])

