<div>
    @if ($this->showEdit)
        @livewire('event.edit-event', ['event_id' => $this->event_id])
    @endif
    @if ($this->showInfo)
        <div style=" display: flex;flex-direction: row; justify-content: space-between">
            {{-- Este es el div de la info --}}
            <div class="card" style="margin-top: 20px !important ;width: 65%;">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between">
                        <span>Detalle del evento:</span>
                        @can('event.edit')
                        <a class="btn btn-sm btn-primary-soft text-primary" href="#!" style="right: 0%"
                        wire:click='showEditEvent()'>Editar evento</a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    {{-- Nombre --}}
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-success" style="text-align: left !important">
                            {{ __('Nombre del evento:') }}
                        </label>
                        <div class="col-md-6 border" style="display: flex; align-items: center">
                            {{-- <span>{{ $user['name'] }}</span> --}}
                            <span>{{ $event->name }}</span>
                        </div>
                    </div>
                    {{-- Fecha --}}
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-success"
                            style="text-align: left !important">
                            {{ __('Fecha del evento:') }}
                        </label>
                        <div class="col-md-6 border" style="display: flex; align-items: center">
                            <span>{{ $event->date }}</span>
                        </div>
                    </div>
                    {{-- Hora --}}
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-success"
                            style="text-align: left !important">
                            {{ __('Hora del evento:') }}
                        </label>
                        <div class="col-md-6 border" style="display: flex; align-items: center">
                            <span>{{ $event->time }}</span>
                        </div>
                    </div>
                    {{-- Direccion --}}
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-success"
                            style="text-align: left !important">
                            {{ __('Direccion del evento:') }}
                        </label>
                        <div class="col-md-6 border" style="display: flex; align-items: center">
                            <span>{{ $event->address }}</span>
                        </div>
                    </div>
                    {{-- Nro Fotografos --}}
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-success"
                            style="text-align: left !important">
                            {{ __('Número de fotografos requeridos:') }}
                        </label>
                        <div class="col-md-6 border" style="display: flex; align-items: center">
                            <span>{{ $event->required_photographers }}</span>
                        </div>
                    </div>
                </div>
            </div>

            @can('event.showQr')
                 {{-- card del qr --}}
            <div class="card" style="margin-top: 20px !important ;width: 30%">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between">
                        <span>QR del evento:</span>
                        <a id="btn-download" class="btn btn-sm btn-primary-soft text-primary" href="{{ asset($event->guest_qr_path) }}"
                            download>Descargar</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ asset($event->guest_qr_path) }}" alt="" style="width: 100%; height: 100%;">
                </div>
            </div>
            @endcan
        </div>
        <script>
            const downloadButton = document.getElementById('btn-download');
            downloadButton.addEventListener('click', function(event) {
                event.preventDefault();
                const imageSource = this.getAttribute('href');
                const imageFileName = getFileNameFromURL(imageSource);

                const link = document.createElement('a');
                link.href = imageSource;
                link.download = imageFileName;
                link.style.display = 'none';

                document.body.appendChild(link);
                link.click();

                document.body.removeChild(link);
            });

            function getFileNameFromURL(url) {
                const parts = url.split('/');
                return parts[parts.length - 1];
            }
        </script>
    @endif
</div>
