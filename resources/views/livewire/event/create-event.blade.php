<div>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="layout"></i></div>
                            Crea tu evento
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card">
            <div class="card-header">Nuevo evento:</div>
            <div class="card-body">
                    <div class="form-group">
                        <label for="titulo">Nombre del evento</label>
                        <input wire:model='event.name' type="text" class="form-control" required>
                        @error('event.name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha del evento</label>
                        <input wire:model='event.date' type="date" class="form-control" required>
                        @error('event.date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="hora">Hora del evento</label>
                        <input wire:model='event.time' type="time" class="form-control" required>
                        @error('event.time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Direccion del evento</label>
                        <input wire:model='event.address' type="text" class="form-control" required>
                        @error('event.address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="invitados">Número de fotografos requeridos</label>
                        <input wire:model='event.required_photographers' type="number" class="form-control" required>
                        @error('event.required_photographers')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button wire:click='store' class="btn btn-primary" style="margin-top: 10px">Crear evento</button>
            </div>
        </div>
    </div>
</div>
