<?php namespace PWC\Component\AdminLTE\Content;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\AdminLTE\Content\Header\Breadcrumb;
use PWC\Component\AdminLTE\Content\Header\Description;
use PWC\Component\Html\Heading\H1;
use PWC\Component\Html\Section;
use PWC\Component\Text;

class Header extends Component
{
    protected $_ID = 'pwc-adminlte-content-header';
    protected ?Breadcrumb $breadcrumb;
    protected ?Text $text;
    protected ?Description $description;

    public function render(): string
    {
        return (string) Section::build(
            H1::build(
                $this->text,
                $this->description,
            ),
            $this->breadcrumb,
        )->class('content-header');
    }

    use BuilderTrait;
}
