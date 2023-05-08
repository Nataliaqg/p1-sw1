<div class="card" style="margin-top: 20px !important">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between">
            <span>Fotografias compradas:</span>
            <div style="display: flex; flex-direction: row">
                <a class="btn btn-primary" style="margin-right: 10px" wire:click='closePurchaseInfo()'>Volver atras</a>
                <a class="btn btn-sm btn-primary-soft text-primary" href="#!"
                    style="right: 0%">Ver evento al que pertenecen</a>
            </div>
                
        </div>
    </div>
    <div class="card-body">
        <div class="row">
                {{-- @foreach ($images as $image) --}}
                    {{-- Foto --}}
                    <div class="col-md-4">
                        <div class="card bg-light mb-4">
                            <div class="card-body" style="height: 350px;">
                                {{-- <img style="width: 100%; height: 100%;" src="{{ asset($image->url_path) }}"
                                    alt=""> --}}
                                <img style="width: 100%; height: 100%;" src="{{ asset('assets/img/profile-example/camila1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-footer" style="max-height: 80px">
                                <div style="flex-direction: row">
                                    <span>Fotografo:</span>
                                    {{-- <span>{{ $image->Photographer->User->name }}</span> --}}
                                    <span>Leo Antelo</span>
                                </div>
                                <div style="flex-direction: row">
                                    <span>Precio:</span>
                                    {{-- <span>{{ $image->price }}</span> --}}
                                    <span>20 bs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}
        </div>
    </div>
</div>
