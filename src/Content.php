<?php namespace PWC\Component\AdminLTE;

use PWC\Component\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Section;

class Content extends Component
{
    protected $_ID = 'pwc-adminlte-content';

    public function render(): string
    {
        return (string) Section::build(
            parent::render(),
        )->class('content');
    }

    use BuilderTrait;
}
