<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class DropdownItem extends Component
{

    // public $active;

    /** Create a new component instance. */
    // public function __construct($active)
    // {
    //     $this->active = $active;
    // }

    /**
     * Get the view / contents that represent the component. */
    public function render()
    {
        return view('components.dropdown-item');
    }
}
