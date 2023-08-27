<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required|min:5')]
    public $title ='';

    #[Rule('required|min:5')]
    public $content = '';

    public function store()
    {
        $this->validate();

        $form_data = $this->all();

        $this->reset();

        return $form_data;
    }
}
