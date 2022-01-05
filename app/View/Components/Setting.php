<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Setting extends Component
{
    public $heading;
    /** Create a new component instance.*/
    public function __construct($heading)
    {
        $this->heading = $heading;
    }

    /** Get the view / contents that represent the component. */
    public function render()
    {
        return view('components.setting');
    }
}
