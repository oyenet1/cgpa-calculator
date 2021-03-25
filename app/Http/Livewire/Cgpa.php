<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cgpa extends Component
{
    public $inputs = [];
    public $gpa = [];
    public $cgpa = [];

    // array of multiplication of units and respective scores
    public $wgba = [];

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
        $units = $this->validate([
            'inputs.*.unit' => ['required', 'integer']
        ]);

        $grades = $this->validate([
            'inputs.*.score' => ['required', 'integer']
        ]);

        for ($i = 0, $j = 0; $i < count($units), $j < count($grades); $i++, $j++) {
            $this->wgba = $units[$i] * $grades[$j];
        }

        // total units
        $this->gpa['totalUnit'] = array_sum($units);
    }
    public function calCgpa()
    {
    }
}
