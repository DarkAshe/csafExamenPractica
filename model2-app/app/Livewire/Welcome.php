<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('livewire.welcome',['categories' => $categories]);
    }
}
