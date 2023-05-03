<div>
    @if ($this->showEdit)
        @livewire('event.edit-event')
    @endif
    <div class="card" style="margin-top: 20px !important">
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
                    <span>Fiesta Tematica</span>
                </div>
            </div>
            {{-- Fecha --}}
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-success"
                    style="text-align: left !important">
                    {{ __('Fecha del evento:') }}
                </label>
                <div class="col-md-6 border" style="display: flex; align-items: center">
                    <span>2023-05-12</span>
                </div>
            </div>
            {{-- Hora --}}
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-success"
                    style="text-align: left !important">
                    {{ __('Hora del evento:') }}
                </label>
                <div class="col-md-6 border" style="display: flex; align-items: center">
                    <span>22:00</span>
                </div>
            </div>
            {{-- Direccion --}}
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-success"
                    style="text-align: left !important">
                    {{ __('Direccion del evento:') }}
                </label>
                <div class="col-md-6 border" style="display: flex; align-items: center">
                    <span>Av. paragua Calle D, barrio urquijo. Nro 500</span>
                </div>
            </div>
            {{-- Nro Fotografos --}}
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-success"
                    style="text-align: left !important">
                    {{ __('Número de fotografos requeridos:') }}
                </label>
                <div class="col-md-6 border" style="display: flex; align-items: center">
                    <span>5</span>
                </div>
            </div>
        </div>
    </div>
</div>
