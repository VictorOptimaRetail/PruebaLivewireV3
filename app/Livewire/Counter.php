<?php

namespace App\Livewire;

use Livewire\Attributes\Js;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function render()
    {
        $this->js('console.log("Se ha renderizado el componente!")');

        return view('livewire.counter');
    }

    public function increment() 
    {
        $this->count++;
    }

    public function decrement()
    {
        if ($this->count > 0) $this->count--;
    }

    #[Js]
    public function incrementJS() 
    {
        return <<<'JS'
            $wire.count++;
        JS;
    }

    #[Js]
    public function decrementJS()
    {
        return <<<'JS'
            if ($wire.count > 0) $wire.count--;
        JS;
    }
}
