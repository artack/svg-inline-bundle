<?php

namespace Artack\SvgInlineBundle;

use Artack\SvgInlineBundle\Twig\SvgInlineExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SvgInlineBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->services()
            ->set(null, SvgInlineExtension::class)
            ->arg('$path', $config['path'])
            ->tag('twig.extension')
        ;
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
                ->scalarNode('path')->isRequired()->cannotBeEmpty()->end()
            ->end()
        ;
    }
}
