<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GridDetail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
   public $property;
   public $photos = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,34,35,36,37,38,39];

     public function __construct($property)
    {
        $this->property = $property;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.grid-detail');
    }
}
