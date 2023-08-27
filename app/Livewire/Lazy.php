<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{
    public $texto = ":D";

    public function render()
    {
        return view('livewire.lazy')->with([
            'emoji' => $this->texto,
        ]);
    }
}
