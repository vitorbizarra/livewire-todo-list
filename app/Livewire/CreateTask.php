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
        $task = $this->form->store();
        $this->dispatch('task-created', task_data: $task)->to(Panel::class);

        $this->js("confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 },
          });");
    }
}
