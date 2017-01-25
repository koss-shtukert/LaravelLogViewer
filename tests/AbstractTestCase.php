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

use KossShtukert\LogViewer\LogViewerServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author Koss Shtukert <karakurtkoss@gmail.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return LogViewerServiceProvider::class;
    }
}
