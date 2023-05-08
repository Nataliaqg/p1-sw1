<div>
    <!-- Messages Dropdown-->
    <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">

        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i data-feather="shopping-cart" style="color:red;"></i>
            <span class="cart-items" style="color:red;"><p>{{count($this->items)}}</p></span>
        </a>

        <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
            >
            <h6 class="dropdown-header dropdown-notifications-header">
                <i class="me-2" data-feather="shopping-cart"></i>
                Carrito
            </h6>
            <!-- ITEM1  -->
            @foreach ($images as $image)
                <div class="dropdown-item dropdown-notifications-item">
                    <img class="dropdown-notifications-item-img" src="{{ asset($image->url_path) }}" />
                    <div class="dropdown-notifications-item-content">
                        <div style="display: flex; flex-direction: row">
                            <div class="dropdown-notifications-item-content-text">Precio:</div>
                            <span style="margin-left: 5px">{{$image->price}} bs</span>
                        </div>
                        <div style="display: flex; flex-direction: row">
                            <div class="dropdown-notifications-item-content-text">Formato:</div>
                            <span style="margin-left: 5px">Digital</span>
                        </div>
                        <div style="display: flex; flex-direction: row">
                            <button wire:click="delete('{{$image->id}}')" onclick="event.stopPropagation();" style="z-index:99; padding: 5px 10px; border: none; background-color: #f1f1f1;">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                    </div>
                </div>
            @endforeach
            {{-- TOTAL --}}
            <div class="dropdown-item dropdown-notifications-item">
                <div style="display: flex; flex-direction: row">
                    <div class="dropdown-notifications-item-content-text">TOTAL:</div>
                    <span style="margin-left: 5px">{{$total}} bs</span>
                </div>
            </div>
            <!-- Footer Link-->
            {{-- <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a> --}}
            <button class="dropdown-item dropdown-notifications-footer btn btn-primary bg-primary"
                style="color:#fff">COMPRAR</button>
        </div>
    </li>
</div>
