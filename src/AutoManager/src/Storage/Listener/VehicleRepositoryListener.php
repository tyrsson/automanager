<?php

declare(strict_types=1);

namespace AutoManager\Storage\Listener;

use Laminas\EventManager\AbstractListenerAggregate;
use Laminas\EventManager\EventManagerInterface;

final class VehicleRepositoryListener extends AbstractListenerAggregate
{
    public function attach(EventManagerInterface $events, $priority = 1) { }
}
