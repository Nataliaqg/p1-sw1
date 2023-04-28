<div class="card card-header-actions">
    <div class="card-header">
        Subir una imagen al evento
        <button class="btn btn-primary btn-sm" >Guardar</button>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3" style="width:50%">
                    @if ($photography)
                        <h2>Previsualizacion de fotografia:</h2>
                        <img src="{{ $photography->temporaryUrl() }}" style="max-width: 300px; max-height: 300px; margin-bottom: 10px">
                    @endif
                    <form wire:submit.prevent="upload">
                        <input type="file" wire:model="photography">
                        {{-- <button type="submit" style="margin-top: 20px">Subir foto</button> --}}
                    </form>
                </div>
                <div class="col-md-9" style="width:50%">
                    {{-- Precio --}}
                    <div class="row mb-3">
                        <span style="margin-top: 20px; margin-left: 10px">Precio:</span>
                        <div class="col-md-6">
                            <input id="price" type="text"
                                class="form-control @error('price') is-invalid @enderror" name="price" required
                                autocomplete="price" pattern="[0-9]+([\.,][0-9]+)?" style="margin-left: 10px">

                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Fade In Up Animation -->
                    <div class="dropdown">
                        <button class="btn btn-teal dropdown-toggle" id="dropdownFadeInUp" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" margin-left: 10px">Estado</button>
                        <div class="dropdown-menu animated--fade-in-up" aria-labelledby="dropdownFadeInUp">
                            <a class="dropdown-item" href="#!">Publica</a>
                            <a class="dropdown-item" href="#!">Privada</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
