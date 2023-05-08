<div>
    @livewire('photographer.show-photographer')
    <div style="display: flex; flex-direction: column">
        {{-- PRIMERA TABLA --}}
        <div class="card" style="margin-top: 20px !important">
            <div class="card-header">

                <div style="display: flex; justify-content: space-between">
                    <span>Fotografos confirmados:</span>
                    @can('event.addPhotographer')
                        <a wire:click='openModalShowPhotographer' class="btn btn-sm btn-primary-soft text-primary"
                            style="right: 0%">Agregar fotografo</a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                @if ($photographers->isEmpty())
                    <span>Aun no tienes fotografos designados para este evento</span>
                @else
                    {{-- Fotografo --}}
                    @foreach ($photographers as $photographer)
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center flex-shrink-0 me-3">
                                <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid"
                                        src="assets/img/illustrations/profiles/profile-1.png" alt="" /></div>
                                <div class="d-flex flex-column fw-bold">
                                    <div class="text-dark line-height-normal mb-1">{{ $photographer->User->name }}</div>
                                    <div class="small text-muted line-height-normal">
                                        @if ($photographer->specialization_id)
                                            {{ $photographer->Specialization->name }}
                                        @else
                                            Ninguna
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown no-caret">
                                <button class="btn btn-yellow btn-icon dropdown-toggle" id="dropdownPeople1"
                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa-solid fa-arrow-pointer"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                    aria-labelledby="dropdownPeople1">
                                    <a class="dropdown-item" href="#!">Ver perfil</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        {{-- SEGUNDA TABLA --}}
        <div class="card" style="margin-top: 20px !important">
            <div class="card-header">

                <div style="display: flex; justify-content: space-between">
                    <span>Fotografos pendientes:</span>
                </div>
            </div>
            <div class="card-body">
                @if ($photographers->isEmpty())
                    <span>Aun no tienes fotografos designados para este evento</span>
                @else
                    {{-- Fotografo --}}
                    @foreach ($photographers as $photographer)
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center flex-shrink-0 me-3">
                                <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid"
                                        src="assets/img/illustrations/profiles/profile-1.png" alt="" /></div>
                                <div class="d-flex flex-column fw-bold">
                                    <div class="text-dark line-height-normal mb-1">{{ $photographer->User->name }}</div>
                                    <div class="small text-muted line-height-normal">
                                        @if ($photographer->specialization_id)
                                            {{ $photographer->Specialization->name }}
                                        @else
                                            Ninguna
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown no-caret">
                                <button class="btn btn-yellow btn-icon dropdown-toggle" id="dropdownPeople1"
                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fa-solid fa-arrow-pointer"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                    aria-labelledby="dropdownPeople1">
                                    <a class="dropdown-item" href="#!">Ver perfil</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
