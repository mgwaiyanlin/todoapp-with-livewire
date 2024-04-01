<div class="col-md-6 mt-4 mt-md-0">
    <h5>What are the most import tasks?</h5>

    <form>
        <input wire:model="name" type="text" class="form-control" placeholder="Add the task you need to do...">
        @error('name')
            <p><small class="text-danger">{{ $message }}</small></p>
        @enderror

        @if (session()->has('success'))
            <p><small class="text-success">{{ session('success') }}</small></p>
        @endif

        <button wire:click.prevent="create" class="btn btn-primary mt-5">Add <i class="fa-solid fa-plus"></i></button>
    </form>
</div>
