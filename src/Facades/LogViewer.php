<?php

/*
 * This file is part of Laravel LogViewer.
 *
 * (c) Koss Shtukert <karakurtkoss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KossShtukert\LogViewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the logviewer facade class.
 *
 * @author Koss Shtukert <karakurtkoss@gmail.com>
 */
class LogViewer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'logviewer';
    }
}
