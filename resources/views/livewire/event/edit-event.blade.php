<div class="card" style="margin-top: 20px !important">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between">
            <span>Editar evento</span>
            <a class="btn btn-sm btn-primary-soft text-primary" href="#!" style="right: 0%">Guardar cambios</a>
        </div>
    </div>
    <div class="card-body">
            {{-- Nombre --}}
            <div class="row mb-3">
                <label for="name"
                    class="col-md-4 col-form-label text-md-end text-success" style="text-align: left !important">
                    {{ __('Nombre del evento:') }}
                </label>
                <div class="col-md-6 border">
                    <input  type="text" class="form-control-plaintext"
                        value="Graduacion">
                </div>
            </div>
            {{-- Fecha --}}
            <div class="row mb-3">
                <label for="name"
                    class="col-md-4 col-form-label text-md-end text-success" style="text-align: left !important">
                    {{ __('Fecha del evento:') }}
                </label>
                <div class="col-md-6 border">
                    <input  type="text" class="form-control-plaintext"
                        value="2023/05/24">
                </div>
            </div>
            {{-- Hora --}}
            <div class="row mb-3">
                <label for="name"
                    class="col-md-4 col-form-label text-md-end text-success" style="text-align: left !important">
                    {{ __('Hora del evento:') }}
                </label>
                <div class="col-md-6 border">
                    <input  type="text" class="form-control-plaintext"
                        value="8:30">
                </div>
            </div>
            {{-- Direccion --}}
            <div class="row mb-3">
                <label for="name"
                    class="col-md-4 col-form-label text-md-end text-success" style="text-align: left !important">
                    {{ __('Direccion del evento:') }}
                </label>
                <div class="col-md-6 border">
                    <input  type="text" class="form-control-plaintext"
                        value="Av. Paragua, entre 3er y 4to anillo, calle C #517">
                </div>
            </div>
            {{-- Nro Fotografos --}}
            <div class="row mb-3">
                <label for="name"
                    class="col-md-4 col-form-label text-md-end text-success" style="text-align: left !important">
                    {{ __('Número de fotografos requeridos:') }}
                </label>
                <div class="col-md-6 border">
                    <input  type="text" class="form-control-plaintext"
                        value="3">
                </div>
            </div>
    </div>
</div>