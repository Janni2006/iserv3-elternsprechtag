<?php

declare(strict_types=1);

namespace jhg\ElternsprechtagBundle\DependencyInjection;

use IServ\CoreBundle\DependencyInjection\IServBaseExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 * 
 * @author Joseph-Haydn-Gymnasium Senden <test@jhgcloud.de>
 */
class jhgElternsprechtagExtension extends IServBaseExtension
{

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {

//        $configuration = new Configuration($this->getAlias());
//        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

    }

}