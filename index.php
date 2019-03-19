<?php
/**
 * View all bookmarks.
 *
 * @link http://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017
 */
require_once dirname(__FILE__).'/inc/debug.inc.php';
require_once dirname(__FILE__).'/inc/bookmarks.inc.php';
require_once dirname(__FILE__).'/inc/templates.inc.php';

$view = [];
$view['title'] = 'Bookmarks';
$view['template'] = 'index';

//...

$view['bookmarks'] = find_all();

//...

render($view);