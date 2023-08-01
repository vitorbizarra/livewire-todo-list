<?php

namespace App\Livewire;

use App\Enums\TaskStatus;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Panel extends Component
{
    public Collection $todo;

    public Collection $progress;

    public Collection $done;

    public function mount()
    {
        $this->todo = Task::where('status', TaskStatus::Todo)->get();
        $this->progress = Task::where('status', TaskStatus::Progress)->get();
        $this->done = Task::where('status', TaskStatus::Done)->get();
    }

    public function render()
    {
        return view('livewire.panel');
    }
}
