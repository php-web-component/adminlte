<?php namespace PWC\Component;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\AdminLTE\Content;
use PWC\Component\AdminLTE\Content\Wrapper;
use PWC\Component\AdminLTE\Footer;
use PWC\Component\AdminLTE\Header;
use PWC\Component\AdminLTE\SideBar;
use PWC\Component\Html\Body;
use PWC\Component\Html\Div;
use PWC\Component\Html\Script;
use PWC\Component\Html\Script\InternalScript;
use PWC\Component\Html\Style;
use PWC\Component\Html\Title;
use PWC\Config\Asset;

class AdminLTE extends Component
{
    protected $_ID = 'pwc-adminlte';

    protected ?Bootstrap $bootstrap;
    protected ?Header $header;
    protected ?SideBar $sidebar;
    protected ?Footer $footer;
    protected ?Wrapper $contentWrapper;
    protected ?Content $content;

    protected function init()
    {
        parent::init();

        Style::register('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic');
        Style::register(Asset::get('dir') . 'php-web-component/adminlte/css/skins/_all-skins.min.css');
        Style::register(Asset::get('dir') . 'php-web-component/adminlte/css/AdminLTE.min.css');
        Style::register(Asset::get('dir') . 'php-web-component/adminlte/Ionicons/css/ionicons.min.css');
        Style::register(Asset::get('dir') . 'php-web-component/adminlte/font-awesome/css/font-awesome.min.css');

        InternalScript::register("$(document).ready(function () { $('.sidebar-menu').tree(); })");
        Script::register(Asset::get('dir') . 'php-web-component/adminlte/js/demo.js');
        Script::register(Asset::get('dir') . 'php-web-component/adminlte/js/adminlte.min.js');
        Script::register(Asset::get('dir') . 'php-web-component/adminlte/fastclick/lib/fastclick.js');
        Script::register(Asset::get('dir') . 'php-web-component/adminlte/jquery-slimscroll/jquery.slimscroll.min.js');
    }

    public function render(): string
    {
        return (string) ($this->bootstrap ?? Bootstrap::build(
            Title::build(
                Text::build('AdminLTE')
            )->withDecorators($this->_decorators)->asDecorator()->replace(),
            Body::build()->class('hold-transition', 'skin-blue', 'sidebar-mini')->withDecorators($this->_decorators)->asDecorator(),

            Div::build(
                ($this->header ?? Header::build())->withDecorators($this->_decorators),
                ($this->sidebar ?? SideBar::build())->withDecorators($this->_decorators),
                ($this->contentWrapper ?? Wrapper::build(
                    ($this->content ?? Content::build(
                        parent::render(),
                    ))->withDecorators($this->_decorators),

                    ...$this->_decorators->get(),
                ))->withDecorators($this->_decorators),
                $this->footer ?? Footer::build(),

                ...$this->_decorators->get(),
            )->class('wrapper')->withDecorators($this->_decorators),
        ))->withDecorators($this->_decorators);
    }

    use BuilderTrait;
}
