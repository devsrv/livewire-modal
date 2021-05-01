<?php

namespace devsrv\LivewireModal\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $activeModal = null;
    public $args = [];

    protected $listeners = ['initModal', 'closeModal'];

    public function initModal($modal, $args = []) {
        $this->activeModal = $modal;
        $this->args = $args;

        $this->dispatchBrowserEvent('modal-ready', ['modal' => $modal]);
    }

    public function closeModal() {
        $this->reset(['activeModal', 'args']);
    }

    public function render()
    {
        return view('livewiremodal::livewire.modal');
    }
}
