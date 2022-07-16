<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikePost extends Component
{
    public $post;

    public function like()
    {
        return "desdela fn de like";
    }

    public function render()
    {
        return view('livewire.like-post');
    }
}