function _livewireModal() {
    return {
        ready: false, 
        modal: '', 
        size: null, 
        heading: 'loading . . .',
        boot() {
            $('#x-modal').on('hidden.bs.modal', function (e) {
                Livewire.emitTo('base-wire-modal', 'closeModal');
                this.ready = false;
            });
        },
        onOpen(event) {
            this.heading = event.detail.title;
            this.modal = event.detail.modal;
            this.size = Object.prototype.hasOwnProperty.call(event.detail, 'size') ? event.detail.size : null;
            this.ready = false;
            $('#x-modal').modal('show');
            Livewire.emitTo('base-wire-modal', 'initModal', event.detail.modal, event.detail.args);
        }
    }
}

function _openModal(title, modal, size = null, params = []) {
    window.dispatchEvent(new CustomEvent("open-x-modal", {
        detail: {
            title: title,
            modal: modal,
            size: size,
            args: params
        }
    }));
}