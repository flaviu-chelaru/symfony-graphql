<?php

return function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $configurator) {
    $configurator->parameters()->set('foo', 'bar');
};
