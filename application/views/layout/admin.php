<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <?php
            foreach ($styles as $val_styles) {
                echo HTML::style($val_styles);
            }
            
            foreach ($scripts as $val_scripts) {
                echo HTML::script($val_scripts);
            }
        ?>
    </head>
    <body>
        <div id="header">
            <div id="top">
                
            </div>
        </div>
        <?php
            echo $content;
        ?>
    </body>
</html>
