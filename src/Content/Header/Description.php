<?php namespace PWC\Component\AdminLTE\Content\Header;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Small;
use PWC\Component\Text;

class Description extends Component
{
    protected $_ID = 'pwc-adminlte-content-header-description';
    protected ?Text $text;

    public function render(): string
    {
        return (string) Small::build(
            $this->text,
        );
    }

    use BuilderTrait;
}
