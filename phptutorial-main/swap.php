<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php
        $str="hello world";
        $revStr=""; 
        for($i=strlen($str)-1;$i>=0;$i--){
            $revStr=$revStr.$str[$i];
        }
        echo $revStr;
        ?>
    </center>

</body>

</html>