<?php
declare(strict_types = 1);

namespace Jalismrs\Symfony\Common\Helpers;

use Symfony\Component\HttpKernel\Event\ControllerEvent;
use function is_array;

/**
 * Class EventHelpers
 *
 * @package Jalismrs\Symfony\Common\Helpers
 */
final class EventHelpers
{
    /**
     * getController
     *
     * @static
     *
     * @param \Symfony\Component\HttpKernel\Event\ControllerEvent $event
     *
     * @return object
     */
    public static function getController(
        ControllerEvent $event
    ) : object {
        $controller = $event->getController();

        if (is_array($controller)) {
            $controller = $controller[0];
        }

        return $controller;
    }
}
