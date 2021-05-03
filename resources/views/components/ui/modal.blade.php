<div {{ $attributes }}>
    <div class="modal-body bg-body">
        <div wire:loading.remove>
            @if(session()->has('alertify'))
            <x-livewiremodal-alertify show :type="session('alertify')['type']">
                {!! session('alertify')['message'] !!}
            </x-livewiremodal-alertify>
            @endif
        </div>

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
