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
        // if(!$event->getAuthorizationChecker()->isGranted(Privilege::ADMIN)
        // && !$event->getAuthorizationChecker()->isGranted(Privilege::TEACHER)
        // && !$event->getAuthorizationChecker()->isGranted(Privilege::STUDENT))
        //     return;


        $event->getMenu(MenuBuilder::GROUP_NETWORK)
            ->addChild('test', ['route' => 'internet_index', 'label' => _('Testname')])
            ->setExtra('icon', 'espt')
            ->setExtra('icon_style', 'iserv')
            ->setExtra('icon_fallback', 'users')
            ->setExtra('icon_fallback_style', 'fugue')
        ;
    }

}