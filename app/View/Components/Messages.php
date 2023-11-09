<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Messages extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected Session $session,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $color = 'blue';
        $textMessage = '';

        $alertTypes = [
            'success'   => 'green', 
            'error'     => 'red', 
            'warning'   => 'yellow', 
            'info'      => 'teal'
        ];

        foreach ($alertTypes as $alertType => $alertColor) {
            if($this->session->has($alertType)){
                $color = $alertColor;
                $textMessage = $this->session->get($alertType);
            }
        }
        
        return view('components.messages', compact('color', 'textMessage'));
    }
}
