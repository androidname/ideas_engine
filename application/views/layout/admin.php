<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <?php
            foreach ($styles as $val_styles) {
                echo HTML::style($val_styles)."\n";
            }
            
            foreach ($scripts as $val_scripts) {
                echo HTML::script($val_scripts)."\n";
            }
        ?>
    </head>
    <body>
        <div id="header">
            <div id="top">
                <a href="<?php echo URL::base(); ?>adminpage" class="top_link_menu">[menu]</a>
                <a href="<?php echo URL::base(); ?>adminpage/logout" class="top_link">Logout</a>
            </div>
        </div>
        <?php
            echo $content;
        ?>
    </body>
</html>
