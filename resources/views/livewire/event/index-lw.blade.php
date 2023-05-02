    <div>
        <h1>Aqui se veran las cards de los distintos eventos</h1>
    <button wire:click='createEvent()'>Crear evento</button>
    <button wire:click='showEvent()'>Ver evento</button>


    @if ($this->create)
        @livewire('event.create-event')
    @endif

    @if ($this->show)
        @livewire('event.show-event')
    @endif
</div>