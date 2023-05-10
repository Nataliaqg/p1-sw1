<div>
    <link href="{{ asset('assets/css/components/modal.css') }}" rel="stylesheet">
    @if ($openPaymentModal)
        <div class="modal mostrar">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="display: flex; justify-content: center;">
                <div class="modal-content" style="width: 550px">

                    <div class="card card-header-actions" style="max-height: 650px; min-height: 550px;">

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
                            {{-- Nombre --}}
                            <div style="display: flex; flex-direction: column">
                                <span>Nombre completo</span>
                                <input class="form-control @error('payment.name') is-invalid @enderror" type="text"
                                    id="name" placeholder="Ingrese su nombre completo" required
                                    wire:model='payment.name'>
                                @error('payment.name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Tarjeta --}}
                            <div style="display: flex; flex-direction: column">
                                <span>Numero de tarjeta:</span>
                                <input class="form-control @error('payment.card-number') is-invalid @enderror" type="text" id="card-number"
                                    placeholder="Ingrese el número de tarjeta" required oninput="formatCardNumber(this)"
                                    wire:keydown.enter="submitForm"
                                    wire:model='payment.card-number'>
                                    @error('payment.card-number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div style="display: flex; flex-direction: row; ; justify-content: space-between">
                                {{-- Fecha expiracion --}}
                                <div style="display: flex; flex-direction: column">
                                    <span>Fecha de expiracion:</span>
                                    <input class="form-control @error('payment.expiration-date') is-invalid @enderror"
                                        type="text" id="expiration-date" placeholder="MM/AA" required
                                        wire:model='payment.expiration-date'>
                                    @error('payment.expiration-date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- Codigo --}}
                                <div style="display: flex; flex-direction: column">
                                    <span>CVV/CVC</span>
                                    <input class="form-control @error('payment.cvc') is-invalid @enderror" type="text" id="cvc"
                                        placeholder="Código de seguridad" required wire:model='payment.cvc'>
                                        @error('payment.cvc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button wire:click='accept' class="btn btn-dark" type="button"
                                    style="margin-top: 15px; width: 100%">PAGAR
                                    {{ $this->total }} bs</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @endif
    <script>
        function formatCardNumber(input) {
            let value = input.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
            let formattedValue = '';

            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value.charAt(i);
            }

            input.value = formattedValue.trim();
        }
    </script>
</div>
