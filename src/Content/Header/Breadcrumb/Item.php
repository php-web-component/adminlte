<?php namespace PWC\Component\AdminLTE\Content\Header\Breadcrumb;

use PWC\Component\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Anchor;
use PWC\Component\Html\Icon;
use PWC\Component\Html\ListItem;
use PWC\Component\Text;

class Item extends Component
{
    protected $_ID = 'pwc-adminlte-content-header-breadcrumb-item';
    protected ?Text $text;
    protected ?Icon $icon;
    protected $href = '#';
    protected $active = false;

    public function render(): string
    {
        return (string) ListItem::build(
            Anchor::build(
                $this->icon,
                $this->text,
            )->href($this->href),
        )->class($this->active ? 'active' : '');
    }

    public function href($href = '#')
    {
        $this->href = $href;
        return $this;
    }

    public function active($active = true)
    {
        $this->active = $active;
        return $this;
    }

    use BuilderTrait;
}
