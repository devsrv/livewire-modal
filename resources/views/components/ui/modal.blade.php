<div {{ $attributes }}>
    <div class="modal-body bg-body">
        @if(session()->has('livewire_notify'))
        <x-livewiremodal-alertify show :type="session('livewire_notify')['type']">
            {!! session('livewire_notify')['message'] !!}
        </x-livewiremodal-alertify>
        @endif

        {{-- progress ui --}}
        <div class="row" id="progress-ui">
            <div wire:loading class="col-md-12 w-100">
                <div class="progress-line"></div>
            </div>
        </div>

        {{ $slot }}
    </div>
    @if(isset($footer))
    <div class="d-flex modal-footer">
        {{ $footer }}
    </div>
    @endif
</div>
