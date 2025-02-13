<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="name" />
        <input type="submit" />
    </form>
    <?PHP 
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $name=htmlspecialchars($_POST['name']);
      if(strlen($name)>12) echo "Aba saala itna bada naam kiska hoota hai be";
      elseif(strlen($name)==0) echo "Kya be chutiya meko chutiya maat bana chup chap naam dal";
      else echo "Kya be Lovde ".$name." yaha kya time pass kar rha hai kaam kar apna";
    }
    ?>
</body>

</html>