# Symfony Bundle Helpers Event

## Test

`phpunit` OU `vendor/bin/phpunit`

coverage reports will be available in `var/coverage`

## Use

```php
use Jalismrs\HelpersEventBundle\EventHelpers;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

class SomeClass {
    public function someEventHandler(
        ControllerEvent $controllerEvent
    ) {
        $controller = EventHelpers::getController($controllerEvent);
        
    }
}
```
