<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class ComponenteHijoModel extends Component
{
    #[Modelable]
    public $valor = '';

    public function render()
    {
        return view('livewire.componente-hijo-model');
    }
}
