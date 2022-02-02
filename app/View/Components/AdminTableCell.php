<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminTableCell extends Component
{
    public $id;
    public $name;
    public $date;
    public $time;
    public $vacants;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $date, $time, $vacants, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this-> time = $time;
        $this-> vacants = $vacants;
        $this-> description = $description;
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
