<?php

namespace Doctrine\Bundle\DoctrineBundle\Tests\DependencyInjection;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
use function class_exists;

class ConfigurationTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGetConfigTreeBuilderDoNotUseDoctrineCommon(): void
    {
        new Configuration();
        $this->assertFalse(class_exists('Doctrine\Common\Proxy\AbstractProxyFactory', false));
    }
}
