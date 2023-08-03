<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Column extends Component
{
    public ?string $title;

    #[Reactive]
    public Collection $tasks;

    public function render()
    {
        return view('livewire.column');
    }
}
