<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Delete extends Component
{
    /**
     * Create a new component instance.
     */
    public $deleteLink;
    public function __construct($deleteLink)
    {
        $this->deleteLink = $deleteLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete');
    }
}
