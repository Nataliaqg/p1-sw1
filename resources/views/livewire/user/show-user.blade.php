<div>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Perfil
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
                            @if ($this->user['photo_path1'])
                                <img src="{{ asset($this->user['photo_path1']) }}" class="d-block w-100"
                                    style=" max-height: 520px;" alt="...">
                                <span class="text-orange fw-800">Imagen 1</span>
                            @else
                                <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                    alt="">
                                <div style="flex-direction: column">
                                    <span class="text-orange fw-800">Sin imagen 1</span>
                                </div>
                            @endif
                        </div>
                        {{-- FOTO2 --}}
                        <div class="carousel-item">
                            @if ($this->user['photo_path2'])
                                <img src="{{ asset($this->user['photo_path2']) }}" class="d-block w-100"
                                    style=" max-height: 520px;" alt="...">
                                <span class="text-orange fw-800">Imagen 2</span>
                            @else
                                <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                    alt="">
                                <div style="flex-direction: column">
                                    <span class="text-orange fw-800">Sin imagen 2</span>
                                </div>
                            @endif
                        </div>
                        {{-- FOTO3 --}}
                        <div class="carousel-item">
                            @if ($this->user['photo_path3'])
                                <img src="{{ asset($this->user['photo_path3']) }}" class="d-block w-100"
                                    style=" max-height: 520px;" alt="...">
                                <span class="text-orange fw-800">Imagen 3</span>
                            @else
                                <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                    alt="">
                                <div style="flex-direction: column">
                                    <span class="text-orange fw-800">Sin imagen 3</span>
                                </div>
                            @endif
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
                    <div class="card-header">Detalles de cuenta</div>
                    <div class="card-body">
                        {{-- Nombre --}}
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end text-success">{{ __('Nombre:') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control-plaintext"
                                    value="{{ $user['name'] }}">
                            </div>
                        </div>

                        {{-- Carnet --}}
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end text-success">{{ __('Carnet:') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control-plaintext"
                                    value="{{ $user['dni'] }}">
                            </div>
                        </div>

                        {{-- Telefono --}}
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end text-success">{{ __('Telefono:') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control-plaintext" readonly
                                    value="{{ $user['phone'] }}">
                            </div>
                        </div>

                        {{-- Direccion --}}
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end text-success">{{ __('Direccion:') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control-plaintext" readonly
                                    value="{{ $user['address'] }}">
                            </div>
                        </div>

                        {{-- Cumple --}}
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end text-success">{{ __('Fecha de nacimiento:') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control-plaintext" readonly
                                    value="{{ $user['birthdate'] }}">
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end text-success">{{ __('Email:') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control-plaintext" readonly
                                    value="{{ $user['email'] }}">
                            </div>
                        </div>

                        <!-- Save changes button-->
                        {{-- <button id="modalButton" class="btn btn-primary" wire:click='showEditUser()'
                            type="button">Editar</button> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
