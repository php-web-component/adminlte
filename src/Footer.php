<?php namespace PWC\Component\AdminLTE;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Anchor;
use PWC\Component\Html\Bold;
use PWC\Component\Html\Div;
use PWC\Component\Html\Footer as HtmlFooter;
use PWC\Component\Html\Strong;
use PWC\Component\Text;

class Footer extends Component
{
    protected $_ID = 'pwc-adminlte-footer';

    public function render(): string
    {
        return (string) HtmlFooter::build(
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
        )->class('main-footer');
    }

    use BuilderTrait;
}
