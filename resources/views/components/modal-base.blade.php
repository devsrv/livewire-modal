<div id="x-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div x-data="_livewireModal()" x-on:open-x-modal.window="onOpen($event)"
        x-on:modal-ready.window="ready = true"
        x-init="boot()"
        class="modal-dialog" :class="[size ? `modal-${size}` : '']" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" x-text="heading"></h5>
                <template x-if="!ready"><span><x-livewiremodal-spinner class="ml-2" sm /></span></template>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id="x--modal-body-wrapper">
                <div x-show="!ready">
                    <div class="modal-body bg-body">
                        <div class="row text-center align-items-center justify-content-center">
                            <div class="col-md-12">
                                <div class="card mb-0 w-100">
                                    <div class="card-body" style="height:200px">
                                        <div class="--skleton"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

                <div x-show="ready">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('vendor/livewiremodal/css/skeleton.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/livewiremodal/css/line-progress.min.css') }}">
<script src="{{ asset('vendor/livewiremodal/js/script.min.js') }}"></script>
