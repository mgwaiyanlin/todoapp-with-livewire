<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $search;

    public function create() {
        $validatedData = $this->validate([
            'name' => 'required|min:3|max:50'
        ]);

        Todo::create($validatedData);

        $this->reset('name');

        session()->flash('success', 'Successfully Added!');

    }

    public function render()
    {
        // *** beware of double quote in where search ***
        return view('livewire.todo-list', [
            'todos' => Todo::latest()->where('name', 'like', "%{$this->search}%")->paginate(5),
        ]);
    }
}
