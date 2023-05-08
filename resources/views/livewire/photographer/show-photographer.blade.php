<div>
    <link href="{{ asset('assets/css/components/modal.css') }}" rel="stylesheet">
    @if ($openModalShowPhotographer)
    <div class="modal mostrar">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 950px;">
            <div class="modal-content">
                <div>
                    <div class="card card-header-actions" style="height: 550px;">
                        <div class="card-header">
                            Solicitar fotografo
                            <div>
                                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal"
                                wire:click="closeModal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>  
                        </div>
                        <div class="card-body"  style="overflow-y: scroll;">
                            <div class="card-body">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Descripcion</th>
                                            <th>Costo Servicio</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userPhotographers as $userPhotographer)
                                             {{-- Fotografo1 --}}
                                        <div class="py-2">
                                            <tr>
                                                <td style="padding: 8px">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar me-2"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                                        {{$userPhotographer->name}}
                                                    </div>
                                                </td>
                                                <td style="padding: 8px">{{$userPhotographer->email}}</td>
                                                <td style="padding: 8px">{{$userPhotographer->phone}}</td>
                                                <td style="padding: 8px">{{$userPhotographer->Photographer->description}}</td>
                                                <td style="padding: 8px">{{$userPhotographer->Photographer->service_price}} bs</td>
                                                <td style="padding: 8px">
                                                   <div >
                                                    <button class="btn btn-warning" type="button">Solicitar</button>
                                                   </div>
                                                </td>
                                            </tr>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>

