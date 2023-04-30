<div>
    <p>editar user livewire hijo</p>

    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Configuracion de cuenta - Perfil
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                {{-- CARRUSEL --}}
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" >
                        <img src="{{asset('assets/img/profile-example/Camila1.jpg')}}" class="d-block w-100" style=" max-height: 520px;" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/img/profile-example/Camila2.jpg')}}" class="d-block w-100" style=" max-height: 520px;" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/img/profile-example/camila3.jpg')}}" class="d-block w-100"  style=" max-height: 520px;" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detalles de mi cuenta</div>
                    <div class="card-body">
                        <form>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                {{-- Nombre --}}
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            required autocomplete="name" autofocus wire:model='user.name'>
                                            
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Carnet --}}
                                <div class="row mb-3">
                                    <label for="dni"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nro. carnet') }}</label>

                                    <div class="col-md-6">
                                        <input id="dni" type="text"
                                            class="form-control @error('dni') is-invalid @enderror" name="dni"
                                            required autocomplete="dni" wire:model='user.dni'>

                                        @error('dni')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Telefono --}}
                                <div class="row mb-3">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="tel"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            required autocomplete="phone" wire:model='user.phone'>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Direccion --}}
                                <div class="row mb-3">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Direccion') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            required autocomplete="address" wire:model='user.address'>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Cumple --}}
                                <div class="row mb-3">
                                    <label for="birthday"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>

                                    <div class="col-md-6">
                                        <input id="birthday" type="date"
                                            class="form-control @error('birthday') is-invalid @enderror"
                                            name="birthday" required autocomplete="birthday" wire:model='user.birthday'>

                                        @error('birthday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Email --}}
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" wire:model='user.email'>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evento para la foto 1
            document.getElementById('photo1').addEventListener('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photo1-preview').setAttribute('src', e.target.result);
                    document.getElementById('photo1-preview').setAttribute('style',
                        'max-width:200px; max-height:200px');
                }
                reader.readAsDataURL(this.files[0]);
            });

            // Evento para la foto 2
            document.getElementById('photo2').addEventListener('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photo2-preview').setAttribute('src', e.target.result);
                    document.getElementById('photo2-preview').setAttribute('style',
                        'max-width:200px; max-height:200px');
                }
                reader.readAsDataURL(this.files[0]);
            });

            // Evento para la foto 3
            document.getElementById('photo3').addEventListener('change', function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photo3-preview').setAttribute('src', e.target.result);
                    document.getElementById('photo3-preview').setAttribute('style',
                        'max-width:200px; max-height:200px');
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
</div>
