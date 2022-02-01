<?php

namespace ContainerSQJLBwL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_WriteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.write' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\WriteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'WriteListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'TraceableChainDataPersister.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataPersister'.\DIRECTORY_SEPARATOR.'ChainDataPersister.php';

        return $container->privates['api_platform.listener.view.write'] = new \ApiPlatform\Core\EventListener\WriteListener(new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister(new \ApiPlatform\Core\DataPersister\ChainDataPersister(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['api_platform.doctrine.orm.data_persister'] ?? $container->load('getApiPlatform_Doctrine_Orm_DataPersisterService'));
        }, 1))), ($container->privates['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()));
    }
}
