<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'Vasco da Gama - 123 anos!';

    public function render()
    {
        //Pegar os tweets já com o relacionamento de user
        $tweets = Tweet::with('user')->get(); 

        return view('livewire.show-tweets',[
            'tweets' => $tweets
        ]);
    }
}
