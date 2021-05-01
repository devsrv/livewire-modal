<div wire:key="x--modal-zone{{$activeModal}}">
    @if($activeModal)
        @livewire($activeModal, $args, key($activeModal))
    @endif
</div>
