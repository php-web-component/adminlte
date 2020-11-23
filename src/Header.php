<?php namespace PWC\Component\AdminLTE;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Header as HtmlHeader;

class Header extends Component
{
    protected $_ID = 'pwc-adminlte-header';

    public function render(): string
    {
        return (string) HtmlHeader::build(
            parent::render(),
        )->class('main-header');
    }

    use BuilderTrait;
}
