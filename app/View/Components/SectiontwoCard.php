<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SectiontwoCard extends Component
{
    public $title;
    public $body;
    public $image;
    public $button;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $body, $image, $button)
    {
        $this->button = $button;
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
        return view('components.sectiontwo-card');
    }
}
