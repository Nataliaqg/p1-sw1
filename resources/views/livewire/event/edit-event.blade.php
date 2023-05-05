<div class="card" style="margin-top: 20px !important">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between">
            <span>Editar evento</span>
            <button id="modalButton" class="btn btn-primary" wire:click='update()' type="button">Guardar
                cambios</button>
        </div>
    </div>

    <div class="card-body">
        
        {{-- Nombre --}}
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('event.name') is-invalid @enderror" name="name" value="{{ old('event.name', $event->name) }}" required autocomplete="name" wire:model.lazy="event.name">

                @error('event.name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Fecha --}}
        <div class="row mb-3">
            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Fecha del evento::') }}</label>

            <div class="col-md-6">
                <input id="date" type="date" class="form-control 
                @error('event.date') is-invalid @enderror" 
                name="date" 
                value="{{ old('event.date', $event->date) }}" 
                required autocomplete="date" 
                wire:model.lazy="event.date">

                @error('event.date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        {{-- Hora --}}
        <div class="row mb-3">
            <label for="time" class="col-md-4 col-form-label text-md-end">{{ __('Hora del evento::') }}</label>

            <div class="col-md-6">
                <input id="time" type="time" class="form-control 
                @error('event.time') is-invalid @enderror" 
                name="time" 
                value="{{ old('event.time', $event->time) }}" 
                required autocomplete="time" 
                wire:model.lazy="event.time">

                @error('event.time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Direccion --}}
        <div class="row mb-3">
            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Direccion del evento::') }}</label>
            <div class="col-md-6">
                <input id="address" type="text" class="form-control 
                @error('event.address') is-invalid @enderror" 
                name="address" 
                value="{{ old('event.address', $event->address) }}" 
                required autocomplete="address" 
                wire:model.lazy="event.address">

                @error('event.address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        {{-- Nro Fotografos --}}
        <div class="row mb-3">
            <label for="required_photographers"
                class="col-md-4 col-form-label text-md-end">{{ __('Numero de fotografos requeridos:') }}</label>

                <div class="col-md-6">
                    <input id="required_photographers" type="number" class="form-control 
                    @error('event.required_photographers') is-invalid @enderror" 
                    name="required_photographers" 
                    value="{{ old('event.required_photographers', $event->required_photographers) }}" 
                    required autocomplete="required_photographers" 
                    wire:model.lazy="event.required_photographers">
    
                    @error('event.required_photographers')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>

    </div>
</div>
