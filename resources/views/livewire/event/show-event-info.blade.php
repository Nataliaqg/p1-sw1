<div>
    @if ($this->showEdit)
        @livewire('event.edit-event',['event_id'=>$this->event_id])
    @endif
    <div style=" display: flex;flex-direction: row; justify-content: space-between">
        {{-- Este es el div de la info --}}
        <div class="card" style="margin-top: 20px !important ;width: 65%;">
            <div class="card-header">
                <div style="display: flex; justify-content: space-between">
                    <span>Detalle del evento:</span>
                    <a class="btn btn-sm btn-primary-soft text-primary" href="#!" style="right: 0%"
                        wire:click='showEditEvent()'>Editar evento</a>
                </div>
            </div>
            <div class="card-body">
                {{-- Nombre --}}
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-success"
                        style="text-align: left !important">
                        {{ __('Nombre del evento:') }}
                    </label>
                    <div class="col-md-6 border" style="display: flex; align-items: center">
                        {{-- <span>{{ $user['name'] }}</span> --}}
                        <span>{{$event->name}}</span>
                    </div>
                </div>
                {{-- Fecha --}}
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-success"
                        style="text-align: left !important">
                        {{ __('Fecha del evento:') }}
                    </label>
                    <div class="col-md-6 border" style="display: flex; align-items: center">
                        <span>{{$event->date}}</span>
                    </div>
                </div>
                {{-- Hora --}}
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-success"
                        style="text-align: left !important">
                        {{ __('Hora del evento:') }}
                    </label>
                    <div class="col-md-6 border" style="display: flex; align-items: center">
                        <span>{{$event->time}}</span>
                    </div>
                </div>
                {{-- Direccion --}}
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-success"
                        style="text-align: left !important">
                        {{ __('Direccion del evento:') }}
                    </label>
                    <div class="col-md-6 border" style="display: flex; align-items: center">
                        <span>{{$event->address}}</span>
                    </div>
                </div>
                {{-- Nro Fotografos --}}
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-success"
                        style="text-align: left !important">
                        {{ __('Número de fotografos requeridos:') }}
                    </label>
                    <div class="col-md-6 border" style="display: flex; align-items: center">
                        <span>{{$event->required_photographers}}</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- card del qr --}}
        <div class="card" style="margin-top: 20px !important ;width: 30%; max-height: 300px">
            <div class="card-header">
                <div style="display: flex; justify-content: space-between">
                    <span>QR del evento:</span>
                    <a class="btn btn-sm btn-primary-soft text-primary" href="#!" style="right: 0%"
                        wire:click='showEditEvent()'>Descargar</a>
                </div>
            </div>
            <div class="card-body">
                Hola aqui viene el qr
            </div>
        </div>
    </div>
</div>
