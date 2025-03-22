<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $name;
    public $type;
    public $id;
    public $value;
    public $maxlength;
    public $onkeyup;
    public $placeholder;
    public $required;
    public function __construct($title, $name, $type='text', $id = '', $value = '', $maxlength = 255,
        $onkeyup = '', $placeholder = '', $required = false)
    {
        $this->title = $title;
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
        $this->value = $value;
        $this->maxlength = $maxlength;
        $this->onkeyup = $onkeyup;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
