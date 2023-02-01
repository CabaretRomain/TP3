<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Affichage de données saisies</h1>
    </body>
<?php

    $a = $_REQUEST['t1'];
    $b = $_REQUEST['t2'];
    echo $a+$b;
    echo "<br>"
?>
<a href="javascript:history.back()">Essayez à nouveau</a>
</html>