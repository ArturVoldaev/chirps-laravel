<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 5;




    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }

}
