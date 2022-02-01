<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardOld extends Component
{
    public $name;
    public $date;
    public $time;
    public $vacants;
    public $description;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $date, $time, $vacants, $description, $image)
    {
        $this->name = $name;
        $this->date = $date;
        $this-> time = $time;
        $this-> vacants = $vacants;
        $this-> description = $description;
        $this-> image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-old');
    }
}
