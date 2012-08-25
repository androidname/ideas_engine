<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<div id="SignOn">
    <?php
        echo Form::open("",array('method'=>'POST'));
        echo "<div>".Form::input("login").Form::label(" :Login ")."</div>";
        echo "<div>".Form::password("password").Form::label(" :Password ")."</div>";
        echo Form::submit("btn", "SignOn");
        echo Form::close();
    ?>
</div>
