<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Form extends Component
{
    public PostForm $form;

    public function render()
    {
        return view('livewire.form');
    }

    public function save()
    {
        $form_data = $this->form->store();
        dump($form_data);
    }
}
