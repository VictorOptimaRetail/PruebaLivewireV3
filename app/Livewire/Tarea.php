<?php

namespace App\Livewire;

use App\Models\Tarea as ModelsTarea;
use Livewire\Component;

class Tarea extends Component
{
    public ModelsTarea $tarea;
    
    public function render()
    {
        return view('livewire.tarea');
    }
}
