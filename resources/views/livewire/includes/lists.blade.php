<div wire:key="{{ $todo->id }}" class="row shadow-lg mt-4 p-3 rounded">
    <div class="col-10">
        <p class="m-0">{{ $todo->name }}</p>
        <p class="fw-light m-0
        "><small>{{ $todo->created_at }}</small></p>
    </div>

    <div class="col-2">
        <a href="" class="text-danger me-3"><i class="fa-solid fa-trash"></i></a>
        <a href="" class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>
</div>
