<?php

namespace App\Http\Livewire;
use Livewire\Component;

class Profile extends Component
{
    public function mount()
    {
        $profile = Profile::where('user_id', 1)->get();
    }
    public function render()
    {

        return view('livewire.profile');
    }
}
