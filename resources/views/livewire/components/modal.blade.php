<div>
    <link href="{{ asset('assets/css/components/modal.css') }}" rel="stylesheet">
    @if ($openModal)
        <div class="modald">
            <div class="modald-contenido">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">title</h4>
                        </div>
                        <div class="modal-body">
                            <p>body</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" wire:click="closeModal()">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
