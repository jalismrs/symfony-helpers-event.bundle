<?php
declare(strict_types = 1);

namespace Tests;

use Jalismrs\HelpersEventBundle\EventHelpers;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Class EventHelpersTest
 *
 * @package Tests
 *
 * @covers  \Jalismrs\HelpersEventBundle\EventHelpers
 */
final class EventHelpersTest extends
    TestCase
{
    /**
     * testGetController
     *
     * @return void
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \PHPUnit\Framework\MockObject\RuntimeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testGetController() : void
    {
        // arrange
        $mockHttpKernel = $this->createMock(HttpKernelInterface::class);
        $testController = new class() {
            public function __invoke(): void {
            
            }
        };
        $testRequest = new Request();

        $event = new ControllerEvent(
            $mockHttpKernel,
            [
                $testController,
                '__invoke',
            ],
            $testRequest,
            null
        );

        // act
        $output = EventHelpers::getController($event);

        // assert
        self::assertSame(
            $testController,
            $output
        );
    }
}
