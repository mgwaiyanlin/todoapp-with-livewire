<div class="container">
    <div class="row">
        <div class="col-md-6 border-end border-secondary">
            <h5>Todo List</h5>

            {{-- search box start --}}
            @include('livewire.includes.search-box')

            {{-- todo lists --}}
            <div class="container mt-4">
                @if ($todos)
                    @foreach ($todos as $todo)
                        @include('livewire.includes.lists')
                    @endforeach
                @else
                    <p class="text-center">No record to do...</p>
                @endif
            </div>

            {{-- pagination --}}
            <div class="mt-5">{{ $todos->links() }}</div>
        </div>

        {{-- create to do --}}
        @include('livewire.includes.create-todo')

    </div>
</div>
