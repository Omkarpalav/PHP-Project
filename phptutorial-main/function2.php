<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunctionV2</title>
</head>

<body>
    <center>

        <?php 
        //factorial with php

        $num=5;
        function fact($num){
            $Fact=1;
            while($num!==0){
                $Fact=$Fact*$num;
                $num--;
            }
            return $Fact;
        }

        echo fact($num);
        
        ?>
    </center>

</body>

</html>