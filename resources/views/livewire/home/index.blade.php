<div>
    <header class="page-header page-header-dark pb-10" style="background: rgb(7,145,118); background: linear-gradient(90deg, rgba(7,145,118,1) 0%, rgba(72,179,150,1) 35%, rgba(94,201,173,1) 63%, rgba(90,152,199,1) 97%);">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa-solid fa-heart" style="color: #d53f3f;"></i></div>
                             Bienvenido, {{ $user['name'] }} !
                        </h1>
                        <div class="page-header-subtitle fw-700" style="color: #ffffff;">"SnapMatch: Captura y revive los mejores momentos una y otra vez"</div>
                        <div style="display: flex; flex-direction: row">
                            <div style="color: #ffffff;">
                                Estas suscrito a estos perfiles:
                            </div>
                            <div class="text-indigo fw-800" style="margin-left: 5px">
                                INVITADO
                                @if ($isOrganizer)
                                    , ORGANIZADOR
                                @endif
                                @if ($isPhotographer)
                                    , FOTOGRAFO
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10" style="width: 100%">
        <div class="card">
            <div class="card-header">Suscripciones disponibles:</div>
            <div class="card-body" style="padding: revert">
                <div class="row">
                    <div class="col-md-4">
                        @livewire('subscription.guest-content')
                    </div>
                    <div class="col-md-4">
                        @livewire('subscription.organizer-content')
                    </div>
                    <div class="col-md-4">
                        @livewire('subscription.photographer-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
