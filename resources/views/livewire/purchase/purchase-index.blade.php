<div>
   <main>
       <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
           <div class="container-xl px-4">
               <div class="page-header-content pt-4">
                   <div class="row align-items-center justify-content-between">
                       <div class="col-auto mt-4">
                           <h1 class="page-header-title">
                               <div class="page-header-icon"><i data-feather="file"></i></div>
                                 Galeria de compras
                           </h1>
                           <div class="page-header-subtitle">Aqui encontraras acceso a las fotografias que has comprado
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
                    <span>Fotografias compradas:</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                        @foreach ($images as $image)
                            {{-- Foto --}}
                            <div class="col-md-4">
                                <div class="card bg-light mb-4">
                                    <div class="card-body" style="height: 350px;">
                                        <img style="width: 100%; height: 100%;" src="{{ asset($image->url_path) }}"
                                            alt="">
                                    </div>
                                    <div class="card-footer" style="max-height: 80px">
                                        <div style="flex-direction: row">
                                            <span>Fotografo:</span>
                                            <span>{{ $image->Photographer->User->name }}</span>
                                        </div>
                                        <div style="flex-direction: row">
                                            <span>Precio:</span>
                                            <span>{{ $image->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
           </div>
       </div>
   </main>
</div>


