<?php

namespace jhg\ElternsprechtagBundle\DependencyInjection;

use IServ\CoreBundle\DependencyInjection\IServBaseExtension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 * 
 * @author Test <test@jhgcloud.de>
 */
class jhgElternsprechtagExtension extends IServBaseExtension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator('/../Resources/config')
        );
        $loader->load('services.yml');
    }
}