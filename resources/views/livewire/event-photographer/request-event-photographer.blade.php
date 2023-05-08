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
                            <div class="page-header-subtitle">Aqui encontraras las solicitudes de trabajo para distintos eventos
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
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            {{-- Evento --}}
                          <tr>
                            <td>Fiesta en la Finca</td>
                            <td>Natalia Quiroga</td>
                            <td>2023-05-14</td>
                            <td>22:00 hrs</td>
                            <td>Av. Paragua, Calle C Nro 512</td>
                            <td>
                                <div style="display: flex; flex-direction: row">
                                    <button class="btn btn-warning" type="button" style="margin-right: 5px">Ver mas</button>
                                    <button class="btn btn-info" type="button" style="margin-right: 5px">Aceptar</button>
                                    <button class="btn btn-danger" type="button">Denegar</button>
                                </div>
                            </td>
                          </tr>
                          {{-- Evento --}}
                          <tr>
                            <td>Piscineada</td>
                            <td>Luciana Quiroga</td>
                            <td>2023-05-14</td>
                            <td>22:00 hrs</td>
                            <td>Av. Paragua, Calle C Nro 512</td>
                            <td>
                                <div style="display: flex; flex-direction: row">
                                    <button class="btn btn-warning" type="button" style="margin-right: 5px">Ver mas</button>
                                    <button class="btn btn-info" type="button" style="margin-right: 5px">Aceptar</button>
                                    <button class="btn btn-danger" type="button">Denegar</button>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </main>
</div>