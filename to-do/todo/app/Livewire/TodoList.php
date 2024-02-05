<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:10')]
    public $name;

    public $search;

    public $editingTodoID;

    #[Rule('required|min:3|max:10')]
    public $editingTodonName;

    
    public function create()
    {
        $validate = $this->validateOnly('name');
        Todo::create($validate);


       
        $this->reset('name');

        session()->flash('success', 'Saved');

        $this->resetPage();
       
    }

    public function delete($id)
    {
        return Todo::find($id)->delete();
    }

    public function toggle($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function cancelEdit()
    {
        $this->reset('editingTodoID','editingTodonName');
    }



    public function edit($id)
    {
        $this->editingTodoID = $id;
        $this->editingTodonName = Todo::find($id)->name;
    }

    public function update()
    {
        $this->validateOnly('editingTodonName');
        Todo::find($this->editingTodoID)->update(['name' =>  $this->editingTodonName]);

        $this->cancelEdit();
    }



    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::latest()->where('name','like',"%{$this->search}%")->paginate(10)
        ]);
    }
}
