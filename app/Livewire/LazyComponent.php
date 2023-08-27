<?php

namespace App\Livewire;

use Livewire\Component;

class LazyComponent extends Component
{
    public $emoji;

    public function mount($emoji)
    {
        sleep(3);
        $this->emoji = $emoji;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <strong>Cargando...</strong>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.lazy-component');
    }
}
