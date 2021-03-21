<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cgpa extends Component
{
    public $inputs = [];

    public function mount()
    {
        $this->addNew();
    }

    public function addForm()
    {
    }
    public function addNew()
    {
        $this->inputs[] = [];
    }
    public function remove($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }

    public function render()
    {
        return view('livewire.cgpa');
    }
}