<?php

/*
 * This file is part of Laravel LogViewer.
 *
 * (c) Koss Shtukert <karakurtkoss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KossShtukert\Tests\LogViewer\Facades;

use KossShtukert\LogViewer\Facades\LogViewer as LogViewerFacade;
use KossShtukert\LogViewer\LogViewer;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use KossShtukert\Tests\LogViewer\AbstractTestCase;

/**
 * This is the logviewer facade test class.
 *
 * @author Koss Shtukert <karakurtkoss@gmail.com>
 */
class LogViewerTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'logviewer';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return LogViewerFacade::class;
    }

    /**
     * Get the facade route.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return LogViewer::class;
    }
}
