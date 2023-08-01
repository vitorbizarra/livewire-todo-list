<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Card extends Component
{
    public Task $task;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.card');
    }
}
