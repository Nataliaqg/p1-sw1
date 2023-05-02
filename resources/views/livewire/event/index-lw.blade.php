<div>
    <h1>Event livewire padre</h1>
    <button wire:click='createEvent()'>Crear evento</button>
    {{-- <button wire:click='editEvent()'>ver usuario</button> --}}

    @if ($this->create)
        @livewire('event.create-event')
    @endif
{{-- 
    @if ($this->edit)
        @livewire('event.edit-event')
    @endif --}}
</div>
