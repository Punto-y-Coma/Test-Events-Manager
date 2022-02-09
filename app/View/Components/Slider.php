<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slider extends Component
{
    public $name;
    public $date;
    public $time;
    public $vacants;
    public $image;
    public $id;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $date, $time, $vacants, $image, $id)

    {
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;
        $this->vacants = $vacants;
        $this->image = $image;
        $this->id = $id;
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