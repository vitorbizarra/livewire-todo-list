<?php

namespace App\Livewire;

use Livewire\Component;

class ColumnHeading extends Component
{
    public ?string $title;

    public function mount($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.column-heading');
    }
}
