<?php namespace PWC\Component;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\AdminLTE\Header;
use PWC\Component\Html\Anchor;
use PWC\Component\Html\Aside;
use PWC\Component\Html\Body;
use PWC\Component\Html\Bold;
use PWC\Component\Html\Div;
use PWC\Component\Html\Footer;
use PWC\Component\Html\Heading\H1;
use PWC\Component\Html\Italic;
use PWC\Component\Html\ListContainer\OrderedList;
use PWC\Component\Html\ListItem;
use PWC\Component\Html\Script;
use PWC\Component\Html\Script\InternalScript;
use PWC\Component\Html\Section;
use PWC\Component\Html\Small;
use PWC\Component\Html\Strong;
use PWC\Component\Html\Style;
use PWC\Component\Html\Title;
use PWC\Config\Asset;

class AdminLTE extends Component
{
    protected $_ID = 'pwc-adminlte';

    protected ?Bootstrap $bootstrap;
    protected ?Header $header;

    public function render(): string
    {
        return (string) ($this->bootstrap ?? Bootstrap::build(
            Title::build(
                Text::build('AdminLTE')
            )->withDecorators($this->_decorators)->asDecorator()->replace(),
            Body::build()->class('hold-transition', 'skin-blue', 'sidebar-mini')->asDecorator(),

            Style::register('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'),
            Style::register(Asset::get('dir') . 'php-web-component/adminlte/css/skins/_all-skins.min.css'),
            Style::register(Asset::get('dir') . 'php-web-component/adminlte/css/AdminLTE.min.css'),
            Style::register(Asset::get('dir') . 'php-web-component/adminlte/Ionicons/css/ionicons.min.css'),
            Style::register(Asset::get('dir') . 'php-web-component/adminlte/font-awesome/css/font-awesome.min.css'),
            Div::build(
                $this->header ?? Header::build(),
                Aside::build(
// belum
                )->class('main-sidebar'),
                Div::build(
                    Section::build(
                        H1::build(
                            Text::build('AdminLTE'),
                            Small::build(
                                Text::build('AdminLTE')
                            )
                        ),
                        OrderedList::build(
                            ListItem::build(
                                Anchor::build(
                                    Italic::build()->class('fa fa-dashboard'),
                                    Text::build(' Dashboard'),
                                )->href('#'),
                            ),
                            ListItem::build(
                                Anchor::build(
                                    Text::build('Example'),
                                )->href('#'),
                            ),
                            ListItem::build(
                                Text::build('AdminLTE')
                            )->class('active'),
                        )->class('breadcrumb'),
                    )->class('content-header'),
                    Section::build(
                        parent::render(),
                    )->class('content')
                )->class('content-wrapper'),
                Footer::build(
                    Div::build(
                        Bold::build(
                            Text::build('Version')
                        ),
                        Text::build(' 2.4.18')
                    )->class('pull-right', 'hidden-xs'),
                    Strong::build(
                        Text::build('Copyright &copy; 2014-2019 '),
                        Anchor::build(
                            Text::build('AdminLTE')
                        )->href('https://adminlte.io'),
                    ),
                    Text::build('. All rights reserved.')
                )->class('main-footer'),
            )->class('wrapper'),
            InternalScript::register("$(document).ready(function () { $('.sidebar-menu').tree(); })"),
            Script::register(Asset::get('dir') . 'php-web-component/adminlte/js/demo.js'),
            Script::register(Asset::get('dir') . 'php-web-component/adminlte/js/adminlte.min.js'),
            Script::register(Asset::get('dir') . 'php-web-component/adminlte/fastclick/lib/fastclick.js'),
            Script::register(Asset::get('dir') . 'php-web-component/adminlte/jquery-slimscroll/jquery.slimscroll.min.js')
        ));
    }

    use BuilderTrait;
}
