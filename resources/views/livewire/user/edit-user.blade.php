<div>
    @livewire('components.modal')
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
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" wire:ignore.self>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        {{-- FOTO1 --}}
                        <div class="carousel-item active">
                            @if ($photo_path1)
                                <img src="{{ $photo_path1->temporaryUrl() }}" class="d-block w-100"
                                    style=" max-height: 520px;" alt="...">
                                <span class="text-orange fw-800">Previsualizacion de imagen 1</span>
                                <label style="z-index: 99;" for="photo_path1"
                                    class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                        class="fas fa-pencil-alt"></i></label>
                            @else
                                @if ($this->user['photo_path1'])
                                    <img src="{{ asset($this->user['photo_path1']) }}" class="d-block w-100"
                                        style=" max-height: 520px;" alt="...">
                                    <label style="z-index: 99;" for="photo_path1"
                                        class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                            class="fas fa-pencil-alt"></i></label>
                                    <span class="text-orange fw-800">Imagen 1</span>
                                @else
                                    <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                        alt="">
                                    <div style="flex-direction: column">
                                        <label style="z-index: 99;" for="photo_path1"
                                            class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                                class="fas fa-solid fa-plus"></i></label>
                                        <span class="text-orange fw-800">Agregar imagen 1</span>
                                    </div>
                                @endif
                            @endif
                            <input wire:model="photo_path1" accept="image/*" type="file" id="photo_path1"
                                style="display:none">
                        </div>
                        {{-- FOTO2 --}}
                        <div class="carousel-item">
                            @if ($photo_path2)
                                <img src="{{ $photo_path2->temporaryUrl() }}" class="d-block w-100"
                                    style=" max-height: 520px;" alt="...">
                                <span class="text-orange fw-800">Previsualizacion de imagen 2</span>
                                <label style="z-index: 99;" for="photo_path2"
                                    class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                        class="fas fa-pencil-alt"></i></label>
                            @else
                                @if ($this->user['photo_path2'])
                                    <img src="{{ asset($this->user['photo_path2']) }}" class="d-block w-100"
                                        style=" max-height: 520px;" alt="...">
                                    <label style="z-index: 99;" for="photo_path2"
                                        class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                            class="fas fa-pencil-alt"></i></label>
                                    <span class="text-orange fw-800">Imagen 2</span>
                                @else
                                    <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                        alt="">
                                    <div style="flex-direction: column">
                                        <label style="z-index: 99;" for="photo_path2"
                                            class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                                class="fas fa-solid fa-plus"></i></label>
                                        <span class="text-orange fw-800">Agregar imagen 2</span>
                                    </div>
                                @endif
                            @endif
                            <input wire:model.lazy='photo_path2' accept="image/*" type="file" id="photo_path2"
                                style="display:none">
                        </div>
                        {{-- FOTO3 --}}
                        <div class="carousel-item">
                            @if ($photo_path3)
                                <img src="{{ $photo_path3->temporaryUrl() }}" class="d-block w-100"
                                    style=" max-height: 520px;" alt="...">
                                <span class="text-orange fw-800">Previsualizacion de imagen 3</span>
                                <label style="z-index: 99;" for="photo_path3"
                                    class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                        class="fas fa-pencil-alt"></i></label>
                            @else
                                @if ($this->user['photo_path3'])
                                    <img src="{{ asset($this->user['photo_path3']) }}" class="d-block w-100"
                                        style=" max-height: 520px;" alt="...">
                                    <label style="z-index: 99;" for="photo_path3"
                                        class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                            class="fas fa-pencil-alt"></i></label>
                                    <span class="text-orange fw-800">Imagen 3</span>
                                @else
                                    <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                        alt="">
                                    <div style="flex-direction: column">
                                        <label style="z-index: 99;" for="photo_path3"
                                            class="btn btn-edit btn-dark position-absolute top-0 start-0"><i
                                                class="fas fa-solid fa-plus"></i></label>
                                        <span class="text-orange fw-800">Agregar imagen 3</span>
                                    </div>
                                @endif
                            @endif
                            <input wire:model.lazy='photo_path3' accept="image/*" type="file" id="photo_path3"
                                style="display:none">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Editar Detalles de mi cuenta:</div>
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
                                            class="form-control @error('user.name') is-invalid @enderror"
                                            wire:model.lazy='user.name'>

                                        @error('user.name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                @if ($isPhotographer != null)
                                    {{-- Descripcion --}}
                                <div class="row mb-3">
                                    <label for="description"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Sobre mi trabajo:') }}</label>
                                    <div class="col-md-6">
                                        <input id="description" type="text"
                                            class="form-control @error('user.photographer.description') is-invalid @enderror"
                                            wire:model.lazy='user.photographer.description'>

                                        @error('user.photographer.description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Precio Servicio --}}
                                <div class="row mb-3">
                                    <label for="service_price"
                                        class="col-md-4 col-form-label text-md-end">{{ __('precio:') }}</label>
                                    <div class="col-md-6">
                                        <input id="service_price" type="number"
                                            class="form-control @error('user.photographer.service_price') is-invalid @enderror"
                                            wire:model.lazy='user.photographer.service_price'>bs

                                        @error('user.photographer.service_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                                

                                {{-- Carnet --}}
                                <div class="row mb-3">
                                    <label for="dni"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nro. carnet') }}</label>

                                    <div class="col-md-6">
                                        <input id="dni" type="text"
                                            class="form-control @error('user.dni') is-invalid @enderror" name="dni"
                                            required autocomplete="dni" wire:model.lazy='user.dni'>

                                        @error('user.dni')
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
                                            class="form-control @error('user.phone') is-invalid @enderror" name="phone"
                                            required autocomplete="phone" wire:model.lazy='user.phone'>

                                        @error('user.phone')
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
                                            class="form-control @error('user.address') is-invalid @enderror" name="address"
                                            required autocomplete="address" wire:model.lazy='user.address'>

                                        @error('user.address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Cumple --}}
                                <div class="row mb-3">
                                    <label for="birthdate"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>

                                    <div class="col-md-6">
                                        <input id="birthdate" type="date"
                                            class="form-control @error('user.birthdate') is-invalid @enderror"
                                            name="birthdate" required autocomplete="birthdate"
                                            wire:model.lazy='user.birthdate'>

                                        @error('user.birthdate')
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
                                            class="form-control @error('user.email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            wire:model.lazy='user.email'>

                                        @error('user.email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                            <!-- Save changes button-->
                            <div style=" display: flex;flex-direction: row; justify-content: space-between">
                                <button class="btn btn-primary" wire:click='openShowUser()' type="button">Volver
                                    Atras</button>
                                <button id="modalButton" class="btn btn-primary" wire:click='update()'
                                    type="button">Guardar
                                    cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
