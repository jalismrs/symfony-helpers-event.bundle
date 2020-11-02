# symfony.common.helper.event

Adds Symfony events helper methods

## Test

`phpunit` OU `vendor/bin/phpunit`

coverage reports will be available in `var/coverage`

## Use

### getController
```php
use Jalismrs\Symfony\Common\Helpers\EventHelpers;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

class SomeClass {
    public function onControllerEvent(
        ControllerEvent $controllerEvent
    ): ControllerEvent {
        $controller = EventHelpers::getController($controllerEvent);
        
        // do something
        
        return $controllerEvent;
    }
}
```
