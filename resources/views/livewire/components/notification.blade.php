<div>
    <!-- Messages Dropdown-->
    <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                data-feather="mail"></i></a>
        <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
            aria-labelledby="navbarDropdownMessages">
            <h6 class="dropdown-header dropdown-notifications-header">
                <i class="me-2" data-feather="mail"></i>
                Message Center
            </h6>
            @foreach ($notifications as $notification)
                <a onclick="event.stopPropagation();" class="dropdown-item dropdown-notifications-item" href="{{route('event.show',$notification->Photography->event_id)}}">
                    <img class="dropdown-notifications-item-img"
                        src="@if ($notification->Photography) {{ asset($notification->Photography->url_path) }} @else {{ asset('assets/img/illustrations/profiles/profile-1.png') }} @endif" />

                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">{{ $notification->description }}.</div>
                        <div class="dropdown-notifications-item-content-details">Has click para ver la imagen</div>
                    </div>
                </a>
            @endforeach
            <!-- Footer Link-->
            <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
        </div>
    </li>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('my-event', function (eventData) {
                const message = eventData.message;
                window.alert(message);
            });
        });
    </script>
</div>
