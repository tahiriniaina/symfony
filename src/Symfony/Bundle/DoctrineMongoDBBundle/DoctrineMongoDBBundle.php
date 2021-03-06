<?php

namespace Symfony\Bundle\DoctrineMongoDBBundle;

use Symfony\Framework\Bundle\Bundle;
use Symfony\Components\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Components\DependencyInjection\Loader\Loader;
use Symfony\Bundle\DoctrineMongoDBBundle\DependencyInjection\MongoDBExtension;

/**
 * Doctrine MongoDB ODM bundle.
 *
 * @author Bulat Shakirzyanov <bulat@theopenskyproject.com>
 * @author Kris Wallsmith <kris.wallsmith@symfony-project.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class DoctrineMongoDBBundle extends Bundle 
{
    /**
     * Customizes the Container instance.
     *
     * @param ParameterBagInterface $parameterBag A ParameterBagInterface instance
     *
     * @return ContainerBuilder A ContainerBuilder instance
     */
    public function buildContainer(ParameterBagInterface $parameterBag)
    {
        ContainerBuilder::registerExtension(new MongoDBExtension(
            $parameterBag->get('kernel.bundle_dirs'),
            $parameterBag->get('kernel.bundles'),
            $parameterBag->get('kernel.cache_dir')
        ));
    }
}