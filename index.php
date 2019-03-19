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

$bookmarks = find_all();
?>

<!DOCTYPE html>
    <html>
        <head lang="en">
            <meta charset="UTF-8">
            <title>Bookmarks</title>
        </head>
        <body>
        <?php if (isset($bookmarks)) : ?>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bookmarks as $bookmark) : ?>
                <tr>
                    <td><?php echo $bookmark['title'] ?? ''; ?></td>
                    <td><?php echo $bookmark['url'] ?? ''; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else : ?>
        <p>No data!</p>
        <?php endif; ?>
        </body>
</html>