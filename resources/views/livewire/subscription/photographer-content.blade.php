<div>
    <div class="card h-100 mx-2 my-2">
        <div class="card-header bg-transparent">
            <span class="badge bg-secondary-soft text-secondary rounded-pill py-2 px-3 mb-2 fw-800">FOTOGRAFO</span>
            <div style="display: flex; flex-direction: row; justify-content: space-between">
                <div class="pricing-columns-price">
                    {{ $total }} bs
                    <span>/mes</span>
                </div>
                @if (!Auth()->user()->Photographer->status)
                    <a wire:click='openPaymentModalPhotographer()'
                        class="btn btn-sm btn-primary-soft text-primary">COMPRAR</a>
                @else
                    <p style="background: red; border-radius: 0.5rem; color:white; padding: 0.3rem;">Adquirido</p>
                @endif
            </div>
        </div>
        <div class="card-body p-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Visualiza tus solicitudes de trabajo
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Informacion de tus eventos designados al alcance
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Gestiona la informacion de tus fotografias
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Visualiza el estado de tus compras
                </li>
                <li class="list-group-item">
                    <i class="text-secondary me-2" data-feather="check-circle"></i>
                    Gestion de tu cuenta de perfil
                </li>
            </ul>
        </div>
        <a class="card-footer d-flex align-items-center justify-content-between text-secondary"
            href="{{ route('user.index') }}">
            Termina de configurar tu cuenta para disfrutar de nuestros servicios <i class="fa-solid fa-gear"></i>
            <i data-feather="arrow-right"></i>
        </a>
    </div>
</div>
