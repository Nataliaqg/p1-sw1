<div>
    {{-- FACEID --}}
    @livewire('faceid.test')

    @if ($this->create)
        @livewire('event.create-event')
    @endif

    @if ($this->show)
        @livewire('event.show-event', ['event_id' => $this->event_id])
    @endif
    @if ($this->index)
        <main>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="file"></i></div>
                                    Lista de eventos
                                </h1>
                                <div class="page-header-subtitle">Aqui encontraras acceso a la informacion de los
                                    eventos a los que estas relacionado
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between">
                            <span>Mis eventos</span>
                            @can('event.create')
                                <a wire:click='createEvent()' class="btn btn-sm btn-primary-soft text-primary"
                                    style="right: 0%">Agregar
                                    evento</a>
                            @endcan
                        </div>
                        <div>
                            @can('event.guestEvents')
                                <button class="btn btn-primary lift bg-danger"
                                    wire:click="$emit('showEventList', 'showGuest')">Soy Invitado</button>
                            @endcan
                            @can('event.organizerEvents')
                                <button class="btn btn-primary lift bg-warning"
                                    wire:click="$emit('showEventList', 'showOrganizer')">Soy Organizador</button>
                            @endcan
                            @can('event.photographerEvents')
                                <button class="btn btn-primary lift bg-info"
                                    wire:click="$emit('showEventList', 'showPhotographer')">Soy Fotografo</button>
                            @endcan
                            {{-- <a class="nav-link disabled" href="#!" tabindex="-1" aria-disabled="true">Disabled</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if ($componentToShow === 'showGuest')
                                @livewire('event.index.guest-event')
                            @elseif ($componentToShow === 'showOrganizer')
                                @livewire('event.index.organizer-event')
                            @elseif ($componentToShow === 'showPhotographer')
                                @livewire('event.index.photographer-event')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
</div>
