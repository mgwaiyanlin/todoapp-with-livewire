<div wire:key="{{ $todo->id }}" class="row shadow-lg mt-4 p-3 rounded">
    <div class="col-10">
        <div class="d-flex">
            @if ($todo->completed)
                <input type="checkbox" class="me-3" wire:click="toggle({{ $todo->id }})" checked>
                <p class="m-0" style="text-decoration: line-through;">{{ $todo->name }}</p>
            @else
                <input type="checkbox" class="me-3" wire:click="toggle({{ $todo->id }})">
                <p class="m-0">{{ $todo->name }}</p>
            @endif

        </div>
        <p class="fw-light m-0
        "><small>{{ $todo->created_at }}</small></p>
    </div>

    <div class="col-2 d-flex">
        <button wire:click="delete({{ $todo->id }})" class="text-danger btn"><i class="fa-solid fa-trash"></i></button>
        <button class="text-success btn"><i class="fa-solid fa-pen-to-square"></i></button>
    </div>
</div>
