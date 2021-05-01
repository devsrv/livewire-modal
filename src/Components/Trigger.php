<?php

namespace devsrv\LivewireModal\Components;

use Illuminate\View\Component;

class Trigger extends Component
{
    public $title;
    public $modal;
    public $sm;
    public $lg;
    public $xl;
    public array $args;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $modal, $sm = false, $lg = false, $xl = false, array $args = [])
    {
        $this->title = $title;
        $this->modal = $modal;
        $this->sm = $sm;
        $this->lg = $lg;
        $this->xl = $xl;
        $this->args = $args;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('livewiremodal::components.trigger');
    }
}
