<div>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="layout"></i></div>
                            Evento "Nombre"
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div style="    position: relative; left: 23px">
            <!-- Button with lift -->
            <a class="btn btn-primary lift bg-danger" wire:click='showEventInfo()'>Informacion</a>
             <!-- Button with lift -->
             <a class="btn btn-primary lift bg-warning" wire:click='showEventPhotographer()'>Fotografos</a>
              <!-- Button with lift -->
            <a class="btn btn-primary lift bg-info" wire:click='showEventPhotography()'>Fotografias</a>
        </div>
    </header>
    <div class="container-xl px-4 mt-n10">
        @if ($this->showEventInfo)
        @livewire('event.show-event-info')
        @endif
        @if ($this->showEventPhotographer)
        @livewire('event-photographer.show-event-photographer')
        @endif
        @if ($this->showEventPhotography)
            @livewire('photography.show-event-photography')
        @endif
    </div>

</div>
