<div>
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                Solicitudes de trabajo
                            </h1>
                            <div class="page-header-subtitle">Aqui encontraras las solicitudes de trabajo para distintos
                                eventos
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between">
                        <span>Solicitudes:</span>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Evento</th>
                                <th scope="col">Organizador</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($myRequests->isEmpty())
                            <span class="text-orange fw-700">Aun no has recibido nuevas solicitudes</span>
                            @else
                                @foreach ($myRequests as $myRequest)
                                    {{-- Evento --}}
                                    <tr>
                                        <td>{{ $myRequest['event_nombre'] }}</td>
                                        <td>{{ $myRequest['organizerUser_name'] }}</td>
                                        <td>{{ $myRequest['organizerUser_telefono'] }}</td>
                                        <td>{{ $myRequest['organizerUser_email'] }}</td>
                                        <td>{{ $myRequest['event_fecha'] }}</td>
                                        <td>{{ $myRequest['event_hora'] }}</td>
                                        <td>{{ $myRequest['event_direccion'] }}</td>
                                        <td>
                                            <div style="display: flex; flex-direction: row">
                                                <button class="btn btn-info" type="button"
                                                    style="margin-right: 5px"  wire:click="confirmRequest('{{$myRequest['event_id']}}')">Aceptar</button>
                                                <button class="btn btn-danger" type="button" wire:click="deleteRequest('{{$myRequest['event_id']}}')">Denegar</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
