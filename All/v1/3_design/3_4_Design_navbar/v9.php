<?php

function menu_item($id, $title, $current) {
    $class = ($current == $id) ? "active" : "inactive";
    ?>
    <tr><td class=<?= $class ?>>
            <a href="v9.php?page=<?= $id ?>"><?= $title ?></a>
        </td></tr>
    <?php
}

function page_menu($page) {
    ?>
    <table width="100%">
        <?php menu_item('Home', 'Home', $page); ?>
        <?php menu_item('About', 'About', $page); ?>
        <?php menu_item('Browse', 'Browse', $page); ?>
        <?php menu_item('Download', 'Download', $page); ?>
        <?php menu_item('Contact Us', 'Contact Us', $page); ?>
    </table>
    <?php
}

$page = isset($_GET['page']) ? $_GET['page'] : 'Home';
?>
<html>
    <head>
        <title>Page - <?= $page ?></title>
        <style type="text/css">
            .inactive, .active
            {
                padding:2px 2px 2px 20px;
            }
            .inactive
            {
                background:skyblue
            }
            .active
            {
                background:red;
                font-weight:bold;
            }
            .inactive a
            {
                text-decoration:none;
            }
            .active a
            {
                text-decoration:none;
                color:white;
            }
        </style>
    </head>
    <body bgcolor="pink">
        <h3><u>Dynamic Navigation Menu</u></h3>
        <table>
            <tr>
                <td width="200" valign="top">
                    <?php page_menu($page); ?>
                </td>
                <td width="600" valign="top">
                    Page: <?= $page ?>
                </td>
            </tr>
        </table>
    </body>
</html>