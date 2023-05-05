<div>
    @if ($this->showEdit)
        @livewire('user.edit-user')
    @endif

    @if ($this->showUser)
        @livewire('user.show-user')
    @endif
</div>
