<?php

namespace App\Livewire;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class CreateTask extends Component
{
    public TaskForm $form;

    public function render()
    {
        return view('livewire.create-task');
    }

    public function save()
    {
        $this->form->store();
        $this->dispatch('task-created')->to(Panel::class);
    }
}