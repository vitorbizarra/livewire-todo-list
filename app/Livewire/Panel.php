<?php

namespace App\Livewire;

use App\Enums\TaskStatus;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class Panel extends Component
{
    public Collection $todo;

    public Collection $progress;

    public Collection $done;

    public function mount()
    {
        $this->loadTasks();
    }

    public function render()
    {
        return view('livewire.panel');
    }

    #[On('task-created')]
    public function loadTasks(): void
    {
        $this->todo = Task::select()->where('status', TaskStatus::Todo)->orderBy('deadline', 'desc')->get();
        $this->progress = Task::select()->where('status', TaskStatus::Progress)->orderBy('deadline', 'desc')->get();
        $this->done = Task::select()->where('status', TaskStatus::Done)->orderBy('deadline', 'desc')->get();
    }
}
