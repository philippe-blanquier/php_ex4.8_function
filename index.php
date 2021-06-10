<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.8 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function Add3Numbers( $n1=0, $n2=0, $n3=0)
            {
                return $n1+$n2+$n3;
            }
            echo Add3Numbers( 1,2,3);
            ?>
       </p>
    </body>
</html>