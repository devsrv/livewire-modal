<button
    x-data x-on:click="$dispatch('open-x-modal', {
        title: '{{ $title }}',
        modal: '{{ $modal }}',
        size: '{{ $sm ? 'sm' : ($lg ? 'lg' : ($xl ? 'xl' : '')) }}',
        args: {!! str_replace('"', '\'', e(json_encode($args))) !!}
    })"
    type="button" class="{{ $attributes->has('class') ? $attributes->get('class') : 'btn' }}" data-toggle="modal">
    {{ $slot }}
</button>