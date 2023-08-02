<?php

namespace App\Livewire\Forms;

use App\Enums\TaskStatus;
use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Form;

class TaskForm extends Form
{
    #[Rule(['required', 'min:5'])]
    public ?string $title;

    #[Rule(['required', 'min:5', 'max:255'])]
    public ?string $description;

    #[Rule(['required'])]
    public ?string $status;

    #[Rule(['required',  'date'])]
    public ?string $deadline;

    public function store()
    {
        $this->validate();

        Task::create($this->all());
    }
}
