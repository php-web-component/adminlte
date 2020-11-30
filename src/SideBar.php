<?php namespace PWC\Component\AdminLTE;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Aside;

class SideBar extends Component
{
    protected $_ID = 'pwc-adminlte-sidebar';

    public function render(): string
    {
        return (string) Aside::build(
            parent::render(),
        )->class('main-sidebar');
    }

    use BuilderTrait;
}
