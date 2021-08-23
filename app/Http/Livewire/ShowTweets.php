<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Vasco da Gama - 123 anos!';

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
