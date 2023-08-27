<?php

namespace App\Livewire;

use Livewire\Attributes\Renderless;
use Livewire\Component;

class Alpine extends Component
{
    public $hola = "";

    public function render()
    {
        $this->js('console.log("Se ha renderizado el componente!")');

        return view('livewire.alpine');
    }

    public function decirHola()
    {
        $this->hola = "Hola!";
    }

    #[Renderless]
    public function decirHolaEnConsola()
    {
        $this->js('console.log("Hola!")');

        // También se puede usar lo siguiente para hacerlo renderless:
        // $this->skipRender();
    }
}
