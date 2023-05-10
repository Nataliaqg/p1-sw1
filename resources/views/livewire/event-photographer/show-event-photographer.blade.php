<div>
    @livewire('photographer.show-photographer', ['event_id' => $event->id])
    <div style="display: flex; flex-direction: column">
        {{-- PRIMERA TABLA --}}
        <div class="card" style="margin-top: 20px !important">
            <div class="card-header">

                <div style="display: flex; justify-content: space-between">
                    <span>Fotografos confirmados:</span>
                    @can('event.addPhotographer')
                        @if ($user->ImOrganizer($event))
                            <a wire:click='openModalShowPhotographer' class="btn btn-sm btn-primary-soft text-primary"
                                style="right: 0%">Agregar fotografo</a>
                        @endif
                    @endcan
                </div>
            </div>
            <div class="card-body">
                @if ($confirmedPhotographers->isEmpty())
                    <span>Aun no tienes fotografos confirmados para este evento</span>
                @else
                    {{-- Fotografo --}}
                    @foreach ($confirmedPhotographers as $confirmedPhotographer)
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center flex-shrink-0 me-3">
                                <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid"
                                        src="@if ($confirmedPhotographer->User->photo_path1) {{ asset($confirmedPhotographer->User->photo_path1) }} @else {{ asset('assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                                </div>
                                <div style="display: flex; flex-direction: column">
                                    <div class="d-flex flex-column fw-bold">
                                        <div class="text-dark line-height-normal mb-1">
                                            {{ $confirmedPhotographer->User->name }}</div>
                                    </div>
                                    <div>
                                        <span>Telefono: {{ $confirmedPhotographer->User->phone }}</span>
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
        @if ($user->ImOrganizer($event))
            <div class="card" style="margin-top: 20px !important">
                <div class="card-header">

                    <div style="display: flex; justify-content: space-between">
                        <span>Fotografos pendientes:</span>
                    </div>
                </div>
                <div class="card-body">
                    @if ($pendingPhotographers->isEmpty())
                        <span>Aun no tienes fotografos designados para este evento</span>
                    @else
                        {{-- Fotografo --}}
                        @foreach ($pendingPhotographers as $pendingPhotographer)
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center flex-shrink-0 me-3">
                                    <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid"
                                            src="@if ($pendingPhotographer->User->photo_path1) {{ asset($pendingPhotographer->User->photo_path1) }} @else {{ asset('assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                                    </div>
                                    <div style="display: flex; flex-direction: column">
                                        <div class="d-flex flex-column fw-bold">
                                            <div class="text-dark line-height-normal mb-1">
                                                {{ $pendingPhotographer->User->name }}</div>
                                        </div>
                                        <div>
                                            <span>Telefono: {{ $pendingPhotographer->User->phone }}</span>
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
        @endif
    </div>
</div>
