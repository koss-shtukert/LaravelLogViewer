<?php

/*
 * This file is part of Laravel LogViewer.
 *
 * (c) Koss Shtukert <karakurtkoss@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$router->get('logviewer', ['as' => 'logviewer.index', 'uses' => 'LogViewerController@getIndex']);

$router->get('logviewer/{date}/delete', ['as' => 'logviewer.delete', 'uses' => 'LogViewerController@getDelete']);

$router->get('logviewer/{date}/{level?}', ['as' => 'logviewer.show', 'uses' => 'LogViewerController@getShow']);

$router->get('logviewer/data/{date}/{level?}', ['as' => 'logviewer.data', 'uses' => 'LogViewerController@getData']);
