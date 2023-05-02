<div>
    <link href="{{ asset('assets/css/components/modal.css') }}" rel="stylesheet">
    @if ($openModal)
    <div class="modal mostrar">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                {{$action}}
              </h5>
              <button
                type="button"
                class="close text-white"
                data-dismiss="modal"
                wire:click="closeModal"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>{{$message}}</h3>
            </div>
          </div>
        </div>
      </div>
    @endif
</div>
