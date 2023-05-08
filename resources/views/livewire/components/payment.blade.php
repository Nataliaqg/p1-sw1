<div>
    <link href="{{ asset('assets/css/components/modal.css') }}" rel="stylesheet">
    @if ($openPaymentModal)
        <div class="modal mostrar">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="display: flex; justify-content: center;">
                <div class="modal-content" style="width: 550px">

                    <div class="card card-header-actions" style="height: 600px;">

                        <div class="card-header">
                            Detalles de pago
                            <div>
                                {{-- <button wire:click='store()' class="btn btn-primary btn-sm">Guardar</button> --}}
                                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal"
                                    wire:click="closePaymentModal">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- contenido --}}
                            <div style="display: flex; justify-content: center;">
                                <img src="{{ asset('assets/img/paypal.png') }}">
                            </div>
                            <div style="display: flex; flex-direction: column">
                                <span>Nombre completo</span>
                                <input class="form-control form-control-solid" type="text" id="card-number"
                                    name="card-number" placeholder="Ingrese su nombre completo" required>
                            </div>
                            <div style="display: flex; flex-direction: column">
                                <span>Numero de tarjeta:</span>
                                <input class="form-control form-control-solid" type="text" id="card-number"
                                    name="card-number" placeholder="Ingrese el número de tarjeta" required>
                            </div>
                            <div style="display: flex; flex-direction: row; ; justify-content: space-between">
                                <div style="display: flex; flex-direction: column">
                                    <span>Fecha de expiracion:</span>
                                    <input class="form-control form-control-solid" type="text" id="expiration-date"
                                        name="expiration-date" placeholder="MM/AA" required>
                                </div>
                                <div style="display: flex; flex-direction: column">
                                    <span>CVV/CVC</span>
                                    <input class="form-control form-control-solid" type="text" id="cvc"
                                        name="cvc" placeholder="Código de seguridad" required>
                                </div>
                            </div>
                            <div>
                                <button wire:click='accept' class="btn btn-dark" type="button" style="margin-top: 15px; width: 100%">PAGAR
                                    {{$this->price}} bs</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @endif

</div>
