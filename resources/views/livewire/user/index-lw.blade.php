<div>
    <h1>user livewire padre</h1>
    <button wire:click='editUser()'>editar usuario</button>
    <button wire:click='showUser()'>ver usuario</button>

    @if ($this->edit)
        @livewire('user.edit-user')
    @endif

    @if ($this->show)
        @livewire('user.show-user')
    @endif
</div>
