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
        $arr=[20,4,50,60,7,5,58,25,12,16,45,25,60];
        sort($arr);
        
        for($i=0;$i<count($arr);$i++)  echo $arr[$i]."<br>";
        ?>
    </center>
</body>

</html>