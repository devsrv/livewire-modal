<?php

namespace devsrv\LivewireModal\Components\UI;

use Illuminate\View\Component;

class Spinner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
<div {{ $attributes->whereStartsWith('wire:') }} class="spinner-{{ $attributes->has('grow') ? 'grow' : 'border'}} spinner-{{ $attributes->has('grow') ? 'grow' : 'border'}}{{ $attributes->has('sm') ? '-sm' : ''}} text-{{ $attributes->has('type') ? $attributes->get('type') : 'primary'}} {{ $attributes->get('class') }}" role="status"><span class="sr-only">Loading...</span></div>
blade;
    }
}
