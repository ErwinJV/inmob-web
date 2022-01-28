<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
    
     */

    public $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = $this->categories;
        return view('components.navbar', compact('categories'));
    }
}
