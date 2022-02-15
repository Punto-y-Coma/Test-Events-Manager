<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminTableCell extends Component
{
    public $name;
    public $date;
    public $time;
    public $vacants;
    public $description;
    public $featured;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $date, $time, $vacants, $description, $featured, $id)
    {
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;
        $this->vacants = $vacants;
        $this->description = $description;
        $this->featured = $featured;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-table-cell');
    }
}
