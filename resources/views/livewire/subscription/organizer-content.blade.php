<div>
    <div class="card h-100">
        <div class="card-header bg-transparent">
            <span class="badge bg-secondary-soft text-secondary rounded-pill py-2 px-3 mb-2 fw-800">ORGANIZADOR</span>
            <div style="display: flex; flex-direction: row; justify-content: space-between">
                <div class="pricing-columns-price">
                    {{$total}} bs
                    <span>/mes</span>
                </div>
                <a wire:click='openPaymentModalOrganizer()' class="btn btn-sm btn-primary-soft text-primary">COMPRAR</a>
            </div>  
        </div>
        <div class="card-body p-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Gestion de tus propios eventos
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Informacion de fotografos a tu alcance
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Solitar servicios de fotografos
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Visualizar el estado de tus solicitudes
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Gestion de tu cuenta de perfil
                </li>
            </ul>
        </div>
        <a class="card-footer d-flex align-items-center justify-content-between text-secondary" href="{{route('user.index')}}">
            Termina de configurar tu cuenta para disfrutar de nuestros servicios <i class="fa-solid fa-gear"></i>
            <i data-feather="arrow-right"></i>
        </a>
    </div>
</div>
