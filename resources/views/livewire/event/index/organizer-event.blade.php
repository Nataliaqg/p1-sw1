<div class="row">
    @if($OrganizerEvents->isEmpty())
        <span>Aun no tienes eventos como organizador</span>
    @else
    @foreach ($OrganizerEvents as $OrganizerEvent)
        <div class="col-md-4">
            <div class="card bg-light mb-4">
                <div class="card-header">
                   <span class="text-warning fw-700">Evento:</span>
                </div>
                <div class="card-body" style="height: 150px;">
                    <div style="flex-direction: row">
                        <i class="fa-regular fa-heart"></i>
                        <span class="text-green">Nombre:</span>
                        <span>{{ $OrganizerEvent->name }}</span>
                    </div>
                    <div style="flex-direction: row">
                        <i class="fa-regular fa-calendar"></i>
                        <span class="text-green">Fecha:</span>
                        <span>{{ $OrganizerEvent->date }}</span>
                    </div>
                    <div style="flex-direction: row">
                        <i class="fa-regular fa-clock"></i>
                        <span class="text-green">Hora:</span>
                        <span>{{ $OrganizerEvent->time }}</span>
                    </div>
                    <div style="flex-direction: row">
                        <i class="fa-regular fa-clock"></i>
                        <span class="text-green">Organizador:</span>
                        <span>{{ $OrganizerEvent->Organizer->User->name }}</span>
                    </div>
                </div>
                <div class="card-footer" style="max-height: 80px">
                    <div>
                        <button wire:click="showEvent('{{ $OrganizerEvent->id }}')" class="btn btn-outline-warning"
                            type="button" style="float: right">Ver</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @endif
</div>
