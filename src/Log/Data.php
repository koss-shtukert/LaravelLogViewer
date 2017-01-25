<?php

/*
 * This file is part of Laravel LogViewer.
 *
 * (c) Koss Shtukert <karakurtkoss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KossShtukert\LogViewer\Log;

use Psr\Log\LogLevel;
use ReflectionClass;

/**
 * This is the data class.
 *
 * @author Koss Shtukert <karakurtkoss@gmail.com>
 */
class Data
{
    /**
     * The cached log levels.
     *
     * @var string
     */
    protected $levels;

    /**
     * Get the log levels.
     *
     * @return string
     */
    public function levels()
    {
        if (!$this->levels) {
            $class = new ReflectionClass(new LogLevel());
            $this->levels = $class->getConstants();
        }

        return $this->levels;
    }
}
