<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Practice in PHP</title>
</head>

<body>
    <center>
        <?php 
        function Sum($arr){
            $sum=0;
            foreach($arr as $num){
                $sum=$sum+$num;
            }
            return $sum;
        }
        $newarr=array(5,6,8,5,4,2,7,5,8,6);
        $result=Sum($newarr);
        echo $result;
        ?>
    </center>
</body>

</html>