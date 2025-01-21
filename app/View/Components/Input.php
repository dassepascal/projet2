<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $value;
    public $required;
    public $autofocus;


    /**
     * Create a new component instance.
     */
    public function __construct($type = 'text', $name, $value = '', $required = false, $autofocus = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->required = $required;
        $this->autofocus = $autofocus;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
