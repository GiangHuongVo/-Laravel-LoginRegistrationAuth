<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Logo extends Component
{
    // Create an avariable and use it
    public $test;
    public $customStyle;

    public function __construct($test, $customStyle)
    {
        $this->test = $test;
        $this ->customStyle = $customStyle;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.logo');
    }
}
