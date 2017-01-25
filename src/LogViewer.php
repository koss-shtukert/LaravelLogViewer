<?php

/*
 * This file is part of Laravel LogViewer.
 *
 * (c) Koss Shtukert <karakurtkoss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KossShtukert\LogViewer;

use KossShtukert\LogViewer\Log\Data;
use KossShtukert\LogViewer\Log\Factory;
use KossShtukert\LogViewer\Log\Filesystem;

/**
 * This is the log viewer class.
 *
 * @author Koss Shtukert <karakurtkoss@gmail.com>
 */
class LogViewer
{
    /**
     * The factory instance.
     *
     * @var \KossShtukert\LogViewer\Log\Factory
     */
    protected $factory;

    /**
     * The filesystem instance.
     *
     * @var \KossShtukert\LogViewer\Log\Filesystem
     */
    protected $filesystem;

    /**
     * The data instance.
     *
     * @var \KossShtukert\LogViewer\Log\Data
     */
    protected $data;

    /**
     * Create a new instance.
     *
     * @param \KossShtukert\LogViewer\Log\Factory $factory
     * @param \KossShtukert\LogViewer\Log\Filesystem $filesystem
     * @param \KossShtukert\LogViewer\Log\Data $data
     *
     */
    public function __construct(Factory $factory, Filesystem $filesystem, Data $data)
    {
        $this->factory = $factory;
        $this->filesystem = $filesystem;
        $this->data = $data;
    }

    /**
     * Get the log data.
     *
     * @param string $date
     * @param string $level
     *
     * @return array
     */
    public function data($date, $level = 'all')
    {
        return $this->factory->make($date, $level)->data();
    }

    /**
     * Delete the log.
     *
     * @param string $date
     *
     * @return void
     */
    public function delete($date)
    {
        return $this->filesystem->delete($date);
    }

    /**
     * List the log files.
     *
     * @return string[]
     */
    public function logs()
    {
        $logs = array_reverse($this->filesystem->files());

        foreach ($logs as $index => $file) {
            $logs[$index] = preg_replace('/.*(\d{4}-\d{2}-\d{2}).*/', '$1', basename($file));
        }

        return $logs;
    }

    /**
     * Get the log levels.
     *
     * @return string[]
     */
    public function levels()
    {
        return $this->data->levels();
    }

    /**
     * Get the factory instance.
     *
     * @return \KossShtukert\LogViewer\Log\Factory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Get the filesystem instance.
     *
     * @return \KossShtukert\Logviewer\Log\Filesystem
     */
    public function getFilesystem()
    {
        return $this->filesystem;
    }

    /**
     * Get the data instance.
     *
     * @return \KossShtukert\LogViewer\Log\Data
     */
    public function getData()
    {
        return $this->data;
    }
}
