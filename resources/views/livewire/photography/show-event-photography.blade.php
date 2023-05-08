<div class="card" style="margin-top: 20px !important">
    @livewire('event-photographer.index', ['event_id' => $this->event_id])
    <div class="card-header">
        <div style="display: flex; justify-content: space-between">
            <span>Fotografias del evento:</span>
            @can('event.addPhotography')
                <a wire:click='openModal2' class="btn btn-sm btn-primary-soft text-primary" href="#!"
                    style="right: 0%">Agregar fotografia</a>
            @endcan
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            @if ($images->isEmpty())
                <span>Aun no se han subido fotografias del evento</span>
            @else
                @foreach ($images as $image)
                    {{-- Foto --}}
                    <div class="col-md-4" id="{{ $image->id }}">
                        <div class="card bg-light mb-4">
                            <div class="card-body" style="height: 350px;">
                                <img style="width: 100%; height: 100%;" src="{{ asset($image->url_path) }}"
                                    alt="">
                            </div>
                            <div class="card-footer" style="max-height: 80px">
                                <div style="flex-direction: row">
                                    <span>Fotografo:</span>
                                    <span>{{ $image->Photographer->User->name }}</span>
                                </div>
                                <div style="flex-direction: row">
                                    <span>Precio:</span>
                                    <span>{{ $image->price }}</span>
                                </div>
                                <button type="button" wire:click="addCart('{{ $image->id }}')">Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                @endforeach

            @endif
        </div>
    </div>

    {{-- <script>
        console.log("gaaa");
        document.addEventListener('livewire:load', function() {
            Livewire.on('addCart2', function(id) {
                console.log("fotografia:", id)
            });
        });
    </script> --}}
</div>
