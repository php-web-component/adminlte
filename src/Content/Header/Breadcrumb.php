<?php namespace PWC\Component\AdminLTE\Content\Header;

use PWC\Component\BuilderTrait;
use PWC\Component;
use PWC\Component\AdminLTE\Content\Header\Breadcrumb\ItemCollection;
use PWC\Component\Html\ListContainer\OrderedList;

class Breadcrumb extends Component
{
    protected $_ID = 'pwc-adminlte-content-header-breadcrumb';
    protected ItemCollection $items;

    public function render(): string
    {
        return (string) OrderedList::build(
            ...$this->items->get(),
        )->class('breadcrumb');
    }

    use BuilderTrait;
}
