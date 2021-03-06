<?php

/*
 * This file is part of Laravel LogViewer.
 *
 * (c) Koss Shtukert <karakurtkoss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KossShtukert\Tests\LogViewer;

use KossShtukert\LogViewer\Log\Data;
use KossShtukert\LogViewer\Log\Factory;
use KossShtukert\LogViewer\Log\Filesystem;
use KossShtukert\LogViewer\LogViewer;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author Koss Shtukert <karakurtkoss@gmail.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testLogDataIsInjectable()
    {
        $this->assertIsInjectable(Data::class);
    }

    public function testLogFilesystemIsInjectable()
    {
        $this->assertIsInjectable(Filesystem::class);
    }

    public function testLogFactoryIsInjectable()
    {
        $this->assertIsInjectable(Factory::class);
    }

    public function testLogViewerIsInjectable()
    {
        $this->assertIsInjectable(LogViewer::class);
    }
}
