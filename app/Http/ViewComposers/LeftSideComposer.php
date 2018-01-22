<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Queries\LeftSideQueries as LeftSide;

class LeftSideComposer
{
/**
 * instance IndexQueriesClass
 * @var instance
 */
    protected $query;


    public function __construct(LeftSide $query)
    {
        // Dependencies automatically resolved by service container...
        $this->query = $query;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return Object
     */
    public function compose(View $view)
    {
       $top_hosters_summary            = $this->query->getTopHosters(10);
    //get top hosters by region
       $top_hosters_by_region_ru       = $this->query->getTopHostersByRegion('RU',10);
       $top_hosters_by_region_uk       = $this->query->getTopHostersByRegion('UK',10);
    //get top hosters by kind (vps, vds)
       $top_hosters_by_kind_shared     = $this->query->getTopHostersByKind('shared',10);
       $top_hosters_by_kind_vds        = $this->query->getTopHostersByKind('vds-server',5);
       $top_hosters_by_kind_vps_server = $this->query->getTopHostersByKind('vps-server',5);

       $view->with(compact(
        'top_hosters_summary', 
        'top_hosters_by_region_ru', 
        'top_hosters_by_region_uk',
        'top_hosters_by_kind_shared',
        'top_hosters_by_kind_vds',
        'top_hosters_by_kind_vps_server'));
   }
}