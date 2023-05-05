<div>
    <button wire:click='showIndex()'>Ver index</button>
    @if ($this->create)
        @livewire('event.create-event')
    @endif

    @if ($this->show)
        @livewire('event.show-event',['event_id'=>$this->event_id])
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
                                    eventos
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
                            <a wire:click='createEvent()' class="btn btn-sm btn-primary-soft text-primary" href="#!" style="right: 0%">Agregar
                                evento</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($events as $event)
                                <div class="col-md-4">
                                    <div class="card bg-light mb-4">
                                        <div class="card-body" style="height: 150px;">
                                            <div style="flex-direction: row">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="text-green">Nombre:</span>
                                                <span>{{$event->name}}</span>
                                            </div>
                                            <div style="flex-direction: row">
                                                <i class="fa-regular fa-calendar"></i>
                                                <span class="text-green">Fecha:</span>
                                                <span>{{$event->date}}</span>
                                            </div>
                                            <div style="flex-direction: row">
                                                <i class="fa-regular fa-clock"></i>
                                                <span class="text-green">Hora:</span>
                                                <span>{{$event->time}}</span>
                                            </div>
                                            <div style="flex-direction: row">
                                                <i class="fa-regular fa-clock"></i>
                                                <span class="text-green">Organizador:</span>
                                                <span>{{$event->Organizer->User->name}}</span>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="max-height: 80px">
                                            <div>
                                                <button wire:click="showEvent('{{$event->id}}')" class="btn btn-outline-warning" type="button"
                                                    style="float: right">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- CARD1 --}}
                            {{-- CARD2 --}}
                            {{-- <div class="col-md-4">
                                <div class="card bg-light mb-4">
                                    <div class="card-body" style="height: 150px;">
                                        <div style="flex-direction: row">
                                            <i class="fa-regular fa-heart"></i>
                                            <span class="text-green">Nombre:</span>
                                            <span>Fiesta Tematica</span>
                                        </div>
                                        <div style="flex-direction: row">
                                            <i class="fa-regular fa-calendar"></i>
                                            <span class="text-green">Fecha:</span>
                                            <span>2023/07/12</span>
                                        </div>
                                        <div style="flex-direction: row">
                                            <i class="fa-regular fa-clock"></i>
                                            <span class="text-green">Hora:</span>
                                            <span>22:00</span>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="max-height: 80px">
                                        <div>
                                            <button class="btn btn-outline-warning" type="button"
                                                style="float: right">Ver</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- CARD3 --}}
                            {{-- <div class="col-md-4">
                                <div class="card bg-light mb-4">
                                    <div class="card-body" style="height: 150px;">
                                        <div style="flex-direction: row">
                                            <i class="fa-regular fa-heart"></i>
                                            <span class="text-green">Nombre:</span>
                                            <span>Boda Felipe y Maria</span>
                                        </div>
                                        <div style="flex-direction: row">
                                            <i class="fa-regular fa-calendar"></i>
                                            <span class="text-green">Fecha:</span>
                                            <span>2023/08/02</span>
                                        </div>
                                        <div style="flex-direction: row">
                                            <i class="fa-regular fa-clock"></i>
                                            <span class="text-green">Hora:</span>
                                            <span>20:00</span>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="max-height: 80px">
                                        <div>
                                            <button class="btn btn-outline-warning" type="button"
                                                style="float: right">Ver</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
</div>
