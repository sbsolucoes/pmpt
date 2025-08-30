<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $cols;

    /**
     * @var int
     */
    public $rows;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $label, int $cols = 30, int $rows = 10, string $placeholder = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->cols = $cols;
        $this->rows = $rows;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.text-area');
    }
}
