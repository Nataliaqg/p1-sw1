<div>
    @if ($openModal)
    <div class="modald">
        <div class="modald-contenido">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Formulario</h4>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <h6 class="text-center py-1">Registro de Color</h6>
                            <div class="form-group">
                                <label for="">Nombre del Color</label>
                                <input wire:model="colorempaque.cpq_nom" type="text" class="form-control">
                                @error('colorempaque.cpq_nom')
                                    <small class="text-danger">Campo Requerido</small>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <input wire:click="store()" type="button" class="btn btn-primary" value="Guardar">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <link href="{{ asset('assets/css/components/modal.css') }}" rel="stylesheet">
</div>