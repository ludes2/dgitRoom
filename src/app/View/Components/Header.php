<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public $title;
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $icon)
    {
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
