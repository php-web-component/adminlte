<?php namespace PWC\Component\AdminLTE;

use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Bootstrap\Column;
use PWC\Component\Bootstrap\Row;
use PWC\Component\Html\Anchor;
use PWC\Component\Html\Bold;
use PWC\Component\Html\Div;
use PWC\Component\Html\Header as HtmlHeader;
use PWC\Component\Html\Heading\H3;
use PWC\Component\Html\Heading\H4;
use PWC\Component\Html\Italic;
use PWC\Component\Html\ListContainer\UnOrderedList;
use PWC\Component\Html\ListItem;
use PWC\Component\Html\Navigation;
use PWC\Component\Html\Span;
use PWC\Component\Html\Image;
use PWC\Component\Html\Paragraph;
use PWC\Component\Html\Small;
use PWC\Component\Text;
use PWC\Config\Asset;

class Header extends Component
{
    protected $_ID = 'pwc-adminlte-header';

    public function render(): string
    {
        return (string) HtmlHeader::build(
            Anchor::build(
                Span::build(
                    Bold::build(Text::build('A')),
                    Text::build('LT')
                )->class('logo-mini'),
                Span::build(
                    Bold::build(Text::build('Admin')),
                    Text::build('LTE')
                )->class('logo-lg'),
            )->href('')->class('logo'),
            Navigation::build(
                Anchor::build(
                    Span::build(
                        Text::build('Toggle navigation')
                    )->class('sr-only'),
                    Span::build()->class('icon-bar'),
                    Span::build()->class('icon-bar'),
                    Span::build()->class('icon-bar'),
                )->class('sidebar-toggle')->data('toggle', 'push-menu')->role('button'),
                Div::build(
                    UnOrderedList::build(
                        ListItem::build(
                            Anchor::build(
                                Italic::build()->class('fa fa-envelope-o'),
                                Span::build(
                                    Text::build('4')
                                )->class('label label-success'),
                            )->class('dropdown-toggle')->data('toggle', 'dropdown'),
                            UnOrderedList::build(
                                ListItem::build(
                                    Text::build('You have 4 messages')
                                )->class('header'),
                                ListItem::build(
                                    UnOrderedList::build(
                                        ListItem::build(
                                            Anchor::build(
                                                Div::build(
                                                    Image::build()->source(Asset::get('dir') . 'php-web-component/adminlte/img/user2-160x160.jpg')->class('img-circle')->alt('User Image'),
                                                )->class('pull-left'),
                                                H4::build(
                                                    Text::build('Support Team'),
                                                    Small::build(
                                                        Italic::build()->class('fa fa-clock-o'),
                                                        ' 5 mins'
                                                    )
                                                ),
                                                Paragraph::build(
                                                    Text::build('Why not buiy a new awesome theme?')
                                                )
                                            )->href('')
                                        ),
                                    )->class('menu'),
                                ),
                                ListItem::build(
                                    Anchor::build(
                                        Text::build('See All Messages')
                                    )->href('#'),
                                )->class('footer')
                            )->class('dropdown-menu'),
                        )->class('dropdown messages-menu'),
                        ListItem::build(
                            Anchor::build(
                                Italic::build()->class('fa fa-bell-o'),
                                Span::build(
                                    Text::build('10')
                                )->class('label label-warning'),
                            )->class('dropdown-toggle')->data('toggle', 'dropdown'),
                            UnOrderedList::build(
                                ListItem::build(
                                    Text::build('You Have 10 notifications')
                                )->class('header'),
                                ListItem::build(
                                    UnOrderedList::build(
                                        ListItem::build(
                                            Anchor::build(
                                                Italic::build()->class('fa fa-users text-aqua'),
                                                ' 5 new members joined today'
                                            )->href('$')
                                        )
                                    )->class('menu'),
                                ),
                                ListItem::build(
                                    Anchor::build(
                                        Text::build('View All')
                                    )->href('#'),
                                )->class('footer'),
                            )->class('dropdown-menu'),
                        )->class('dropdown notifications-menu'),
                        ListItem::build(
                            Anchor::build(
                                Italic::build()->class('fa fa-flag-o'),
                                Span::build(
                                    Text::build('9')
                                )->class('label label-danger'),
                            )->class('dropdown-toggle')->data('toggle', 'dropdown'),
                            UnOrderedList::build(
                                ListItem::build(
                                    Text::build('You Have 9 tasks')
                                )->class('header'),
                                ListItem::build(
                                    UnOrderedList::build(
                                        ListItem::build(
                                            Anchor::build(
                                                H3::build(
                                                    Text::build('Design some buttons'),
                                                    Small::build(
                                                        Text::build('20%')
                                                    )->class('pull-right')
                                                ),
                                                Div::build(
                                                    Div::build(
                                                        Span::build(
                                                            Text::build('20% Complete')
                                                        )->class('sr-only')
                                                    )->class('progress-bar', 'progress-bar-aqua')->role('progressbar')->aria('valuenow', 20)->aria('valuemin', 0)->aria('valuemax', 100)->style([
                                                        'width' => '20%'
                                                    ])
                                                )->class('progress', 'xs')
                                            )->href('#')
                                        )
                                    )->class('menu'),
                                ),
                                ListItem::build(
                                    Anchor::build(
                                        Text::build('View all tasks')
                                    )->href('#'),
                                )->class('footer'),
                            )->class('dropdown-menu'),
                        )->class('dropdown tasks-menu'),
                        ListItem::build(
                            Anchor::build(
                                Image::build()->source(Asset::get('dir') . 'php-web-component/adminlte/img/user2-160x160.jpg')->class('user-image')->alt('User Image'),
                                Span::build(
                                    Text::build('Alexander Pierce')
                                )->class('hidden-xs')
                            )->href('#')->class('dropdown-toggle')->data('toggle', 'dropdown'),
                            UnOrderedList::build(
                                ListItem::build(
                                    Image::build()->source(Asset::get('dir') . 'php-web-component/adminlte/img/user2-160x160.jpg')->class('img-circle')->alt('User Image'),
                                    Paragraph::build(
                                        Text::build('Alexander Pierce'),
                                        Small::build(
                                            Text::build('Member since Nov. 2012')
                                        )
                                    )
                                )->class('user-header'),
                                ListItem::build(
                                    Row::build(
                                        Column::build(
                                            Anchor::build(
                                                Text::build('Followers')
                                            )->href('#')
                                        )->xSmall()->size(4)->class('text-center'),
                                        Column::build(
                                            Anchor::build(
                                                Text::build('Sales')
                                            )->href('#')
                                        )->xSmall()->size(4)->class('text-center'),
                                        Column::build(
                                            Anchor::build(
                                                Text::build('Friends')
                                            )->href('#')
                                        )->xSmall()->size(4)->class('text-center'),
                                    ),
                                )->class('user-body'),
                                ListItem::build(
                                    Div::build(
                                        Anchor::build(
                                            Text::build('Profile')
                                        )->href('#')->class('btn btn-default btn-flat')
                                    )->class('pull-left'),
                                    Div::build(
                                        Anchor::build(
                                            Text::build('Sign Out')
                                        )->href('#')->class('btn btn-default btn-flat')
                                    )->class('pull-right'),
                                )->class('user-footer'),
                            )->class('dropdown-menu'),
                        )->class('dropdown user user-menu'),
                        ListItem::build(
                            Anchor::build(
                                Italic::build()->class('fa fa-gears')
                            )->data('toggle', 'control-sidebar')
                        )
                    )->class('nav navbar-nav'),
                )->class('navbar-custom-menu'),
            )->class('navbar navbar-static-top'),
        )->class('main-header');
    }

    use BuilderTrait;
}
