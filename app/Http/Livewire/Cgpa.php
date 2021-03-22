<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cgpa extends Component
{
    public $inputs = [];
    public $gpa = [];
    public $cgpa = [];

    public function mount()
    {
        $this->addNew();
    }

    public function render()
    {
        return view('livewire.cgpa');
    }

    public function addNew()
    {
        $this->inputs[]++;
    }

    public function remove($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }

    public function calGpa()
    {
        $this->gpa['totalUnit'] = array_sum($this->validate([
            'inputs.*.unit' => ['required', 'integer']
        ]));

        $this->gpa['totalScore'] = array_sum($this->validate([
            'inputs.*.score' => ['required', 'integer']
        ]));

        
    }
    public function calCgpa()
    {
    }
}
