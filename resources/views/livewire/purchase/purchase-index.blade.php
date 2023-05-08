<div>
   @if ($this->showPurchaseInfo)
   @livewire('purchase.purchase-info')
@endif
@if ($this->showIndex)
<div>
   <main>
       <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
           <div class="container-xl px-4">
               <div class="page-header-content pt-4">
                   <div class="row align-items-center justify-content-between">
                       <div class="col-auto mt-4">
                           <h1 class="page-header-title">
                               <div class="page-header-icon"><i data-feather="file"></i></div>
                                 Lista de compras
                           </h1>
                           <div class="page-header-subtitle">Aqui encontraras acceso a la informacion de compras realizadas
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
                       <span>Compras:</span>
                   </div>
               </div>
               <div class="card-body">
                   <table class="table">
                       <thead>
                         <tr>
                           <th scope="col">Fecha</th>
                           <th scope="col">Hora</th>
                           <th scope="col">Monto total</th>
                           <th scope="col">Action</th>
                         </tr>
                       </thead>
                       <tbody>
                           {{-- Compra --}}
                         <tr>
                           <td>2023-05-14</td>
                           <td>22:00 hrs</td>
                           <td>100 bs</td>
                           <td>
                               <div style="display: flex; flex-direction: row">
                                   <button wire:click='showPurchaseInfo()' class="btn btn-warning" type="button" style="margin-right: 5px">Ver detalle</button> 
                               </div>
                           </td>
                         </tr>
                       </tbody>
                     </table>
               </div>
           </div>
       </div>
   </main>
</div>
@endif
</div>

