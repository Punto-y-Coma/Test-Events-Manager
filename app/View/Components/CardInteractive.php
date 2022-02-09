<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardInteractive extends Component
{
    public $masterclass;
    public $id;
    public $name;
    public $date;
    public $time;
    public $vacants;
    public $description;
    public $image;
    public $featured;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $date, $time, $vacants, $description, $image, $featured, $masterclass)
    {
        $this->masterclass = $masterclass;
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;
        $this->vacants = $vacants;
        $this->description = $description;
        $this->image = $image;
        $this->featured = $featured;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-interactive');
    }
}
