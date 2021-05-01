<?php

namespace devsrv\LivewireModal;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use devsrv\LivewireModal\Http\Livewire\Modal as WireModal;
use devsrv\LivewireModal\Components\{
    Base,
    ModalBase,
    Trigger,
};
use devsrv\LivewireModal\Components\UI\{
    Modal,
    Spinner,
    Alertify
};

class LivewireModalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('base-wire-modal', WireModal::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'livewiremodal');

        $this->loadViewComponentsAs('livewiremodal', [
            Base::class,
            Spinner::class,
            Alertify::class,
            Modal::class,
            Trigger::class,
            ModalBase::class,
        ]);

        $this->publishes([
            __DIR__.'/../public/dist' => public_path('vendor/livewiremodal'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
