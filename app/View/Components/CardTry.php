<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Masterclass;

class CardTry extends Component
{
    public $masterclasses;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->masterclasses = Masterclass::where('date', '<', date("Y-m-d"))->paginate(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-try');
    }
}
