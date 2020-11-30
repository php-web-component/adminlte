<?php namespace PWC\Component\AdminLTE\Content;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\AdminLTE\Content;
use PWC\Component\Html\Div;

class Wrapper extends Component
{
    protected $_ID = 'pwc-adminlte-content-wrapper';
    protected ?Content $content;
    protected ?Header $header;

    public function render(): string
    {
        return (string) Div::build(
            ($this->header ?? Header::build())->withDecorators($this->_decorators),
            $this->content ?? Content::build(
                ...$this->_children
            ),
        )->class('content-wrapper');
    }

    use BuilderTrait;
}
