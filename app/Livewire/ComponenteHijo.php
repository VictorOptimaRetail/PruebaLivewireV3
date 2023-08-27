<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ComponenteHijo extends Component
{
    #[Reactive]
    public $texto;

    public function render()
    {
        return view('livewire.componente-hijo', [
            'texto' => $this->texto,
        ]);
    }

    #[On('pedir-permiso-borrar')]
    public function darPermiso($color)
    {
        $color == "rojo" ? $permitido = true : $permitido = false;
        $this->dispatch('dar-permiso-borrar', permiso: $permitido)->to('nesting');
    }
}
