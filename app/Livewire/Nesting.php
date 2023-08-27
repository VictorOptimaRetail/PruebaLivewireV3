<?php

namespace App\Livewire;

use App\Models\Tarea;
use Livewire\Attributes\On;
use Livewire\Component;

class Nesting extends Component
{
    public $texto;

    public $textoModel;

    public $listaTareas;

    public $descripcionTarea;
    
    public function render()
    {
        $this->listaTareas = Tarea::all();
        return view('livewire.nesting');
    }

    public function borrar()
    {
        $this->reset('textoModel');
    }

    public function anadirTarea()
    {
        Tarea::create(["descripcion" => $this->descripcionTarea]);

        $this->reset('descripcionTarea');
    }

    public function borrarTarea($idTarea)
    {
        Tarea::find($idTarea)->delete();
    }

    public function pedirPermisoBorrar($color)
    {
        $this->dispatch("pedir-permiso-borrar", color: $color)->to('componente-hijo');
    }

    #[On('dar-permiso-borrar')]
    public function borrarConEvento($permiso)
    {
        if ($permiso) $this->reset('texto');
    }
}
