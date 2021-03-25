<?php

namespace App\Http\Livewire;

use App\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Courses extends Component
{
    use WithPagination;
    public $code, $title, $unit;
    public $courses = [];

    public function mount()
    {
        $this->courses = Course::all();
    }

    protected $rules = [
        'code' => ['required', 'min:3', 'max:10', 'unique:courses'],
        'title' => ['required', 'min:10', 'unique:courses'],
        'unit' => ['required', 'integer', 'min:1', 'max:6']
    ];

    function submit()
    {
        $data = $this->validate();
        Course::create($data);
        session()->flash('success', 'course saved successfully');
    }

    // edit functtion

    function edit($id)
    {
        $edit = Course::findOrFail($id);
        $this->code = $edit->code;
        $this->title = $edit->title;
        $this->unit = $edit->unit;
    }

    public function remove($courseId)
    {
        dd($courseId);
    }

    public function render()
    {
        return view('livewire.courses');
    }
}
