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
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Imagenes de perfil</div>
                    <div class="card-body text-center"
                        style="flex-direction: column; height: 466px; overflow-y: scroll; overflow-x:hidden">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- FOTO1 --}}
                            <div class="form-group">
                                <label for="photo1" class="text-success fw-800">{{ __('Foto 1') }}</label>
                                <div class="custom-file">
                                    <input id="photo1" type="file"
                                        class="custom-file-input @error('photo1') is-invalid @enderror" name="photo1"
                                        accept="image/*">
                                    <label class="custom-file-label" for="photo1">{{ __('Subir imagen') }}</label>
                                    @error('photo1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <img id="photo1-preview" src="#" style="display: none">
                            </div>
                            {{-- FOTO2 --}}
                            <div class="form-group">
                                <label for="photo2" class="text-success fw-800">{{ __('Foto 2') }}</label>
                                <div class="custom-file">
                                    <input id="photo2" type="file"
                                        class="custom-file-input @error('photo2') is-invalid @enderror" name="photo2"
                                        accept="image/*">
                                    <label class="custom-file-label" for="photo2">{{ __('Subir imagen') }}</label>
                                    @error('photo2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <img id="photo2-preview" src="#" style="display: none">
                            </div>
                            {{-- FOTO3  --}}
                            <div class="form-group">
                                <label for="photo3" class="text-success fw-800">{{ __('Foto 3') }}</label>
                                <div class="custom-file">
                                    <input id="photo3" type="file"
                                        class="custom-file-input @error('photo3') is-invalid @enderror" name="photo3"
                                        accept="image/*">
                                    <label class="custom-file-label" for="photo3">{{ __('Subir imagen') }}</label>
                                    @error('photo3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <img id="photo3-preview" src="#" style="display: none">
                            </div>
                            <div class="form-group" style="margin-top: 10px">
                                <button type="submit" class="btn btn-primary">{{ __('Subir Fotos') }}</button>
                            </div>
                        </form>
                    </div>
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
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                            required autocomplete="dni">

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
                                            required autocomplete="phone">

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
                                            required autocomplete="address">

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
                                            name="birthday" required autocomplete="birthday">

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
                                            value="{{ old('email') }}" required autocomplete="email">

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
