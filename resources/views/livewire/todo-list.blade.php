<div class="container">
    <div class="row">
        <div class="col-md-6 border-end border-secondary">
            <h5>Todo List</h5>

            {{-- search box start --}}
            <div class="d-flex align-items-center justify-content-between">
                <input type="search" class="form-control" id="search" placeholder="Search here...">
                <button class="btn btn-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            {{-- search box end --}}

            {{-- todo lists start --}}
            <div class="container mt-4">
                <div class="row shadow-sm p-3 rounded">
                    <div class="col-10">
                        <p class="m-0">Todo description will be here.</p>
                        <p class="fw-light m-0
                        "><small>1-April-2024</small></p>
                    </div>

                    <div class="col-2">
                        <a href="" class="text-danger me-3"><i class="fa-solid fa-trash"></i></a>
                        <a href="" class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </div>
            </div>
            {{-- todo lists end --}}

        </div>

        <div class="col-md-6 mt-4 mt-md-0">
            <h5>What are the most import tasks?</h5>

            <form action="">
                <input type="text" class="form-control" placeholder="Add the task you need to do...">
                <p><small class="text-success">Successfully Added!</small></p>
                <button class="btn btn-primary mt-5">Add <i class="fa-solid fa-plus"></i></button>
            </form>
        </div>
    </div>
</div>
