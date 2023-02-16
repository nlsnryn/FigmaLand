<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainList extends Component
{
    public $image;
    public $title;
    public $body;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $body)
    {
        $this->image = $image;
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-list');
    }
}
