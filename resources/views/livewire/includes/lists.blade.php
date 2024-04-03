<div wire:key="{{ $todo->id }}" class="row shadow-lg mt-4 p-3 rounded">
    <div class="col-10">
        <div class="d-flex">
            @if ($todo->completed)
                <input type="checkbox" class="me-3" wire:click="toggle({{ $todo->id }})" checked>
                <p class="m-0" style="text-decoration: line-through;">{{ $todo->name }}</p>
            @else
                <input type="checkbox" class="me-3" wire:click="toggle({{ $todo->id }})">
                @if ($editingID == $todo->id)
                    <div class="">
                        <input type="text" wire:model="editingName" class="form-control">
                        @error ('editingName')
                            <p><small class="text-danger">{{ $message }}</small></p>
                        @enderror
                    </div>
                @else
                    <p class="m-0">{{ $todo->name }}</p>
                @endif
            @endif

        </div>

        <p class="fw-light m-0"><small>{{ $todo->created_at }}</small></p>

        @if ($editingID == $todo->id)
            <div class="mt-2">
                <button wire:click="update" class="btn btn-success btn-sm">Update</button>
                <button wire:click="cancelEdit" class="btn btn-danger btn-sm">Cancel</button>
            </div>
        @endif
    </div>

    <div class="col-2 d-flex">
        <button wire:click="delete({{ $todo->id }})" class="text-danger btn"><i class="fa-solid fa-trash"></i></button>
        <button wire:click="edit({{ $todo->id }})" class="text-success btn"><i class="fa-solid fa-pen-to-square"></i></button>
    </div>
</div>
