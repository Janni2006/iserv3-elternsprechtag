<?php

declare(strict_types=1);

namespace jhg\ElternsprechtagBundle\EventListener;

use IServ\CoreBundle\Event\MenuEvent;
use IServ\CoreBundle\EventListener\MainMenuListenerInterface;
// use IServ\AdminBundle\EventListener\AdminMenuListenerInterface;
use IServ\CoreBundle\Menu\MenuBuilder;
use IServ\Library\Config\Config;

class MenuListener implements MainMenuListenerInterface
{
    /**
     * @var Config
     */
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }
   /**
     * {@inheritDoc}
     */
    public function onBuildMainMenu(MenuEvent $event): void {
        $menu = $event->getMenu()->getChild('system');

        $item = $menu->addChild('jhg_nav', [
            'route' => 'internet_index',
            'label' => _('Test'),
        ]);

        $item->setExtra('icon', 'key--pencil');
        $item->setExtra('icon_style', 'fugue');
    }
}


// class MenuListener implements AdminMenuListenerInterface
// {
//     /**
//      * {@inheritDoc}
//      */
//     public function onBuildAdminMenu(MenuEvent $event): void
//     {
//         $menu = $event->getMenu();
//         $block = $menu->getChild(self::ADMIN_NETWORK);
//         $block->addChild(
//             'test_index1',
//             ['route' => 'internet_index', 'label' => _('E-Mail server statistics')]
//         )
//             ->setExtra('orderNumber', 99)
//             ->setExtra('icon', 'mail')
//         ;
//     }
// }