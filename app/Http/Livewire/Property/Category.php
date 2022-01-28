<?php

namespace App\Http\Livewire\Property;
use App\Models\Property;

use Livewire\Component;

class Category extends Component
{
    public $category;
  
    public function mount($category)
    {
      $this->category = $category;
     
    }

    

    public function render()
    {
       
        return view('livewire.property.category',  [
            'properties' => Property::where('category_id', $this->category->id)->get(),
        ]);
    }
}
