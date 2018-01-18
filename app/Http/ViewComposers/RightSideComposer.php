<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
// use App\Queries\LeftSideQueries as LeftSide;

class RightSideComposer
{
/**
 * instance IndexQueriesClass
 * @var [type]
 */
    protected $query;


    // public function __construct(LeftSide $query)
    // {
    //     // Dependencies automatically resolved by service container...
    //     $this->query = $query;
    // }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       $user = ['Teez0neSide',1,23];
       $view->with(compact('user'));
   }
}