<?php

namespace devsrv\LivewireModal\Components;

use Illuminate\View\Component;

class Base extends Component
{
    public function __construct() {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('livewiremodal::components.base');
    }
}
