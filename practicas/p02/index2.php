<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 2</title>
</head>
<body>
    <h2>Inciso2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue::</p>
    <p>$a = “ManejadorSQL”;
$b = 'MySQL’;
$c = &$a;</p>
    <?php
    $a = "manejadorql";
        echo "$a<br>";

        $b = 'MySQL';
        echo "$b<br>";
        
        $c = &$a;
        echo "$c<br>";

        $a = "PHP server";
        
        $b = &$a;
        
        echo "$a <br>";
        echo "$b <br>";
        echo "$c <br>";
        echo "$a <br>";
        echo "$b <br>";

    ?>
</body>
</html>