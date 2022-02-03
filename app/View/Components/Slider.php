<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slider extends Component
{
    public $name;
    public $date;
    public $vacants;
    public $image;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->name = $name;
        //$this->date = $date;
        //$this-> vacants = $vacants;
        //$this-> image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider');
    }
}