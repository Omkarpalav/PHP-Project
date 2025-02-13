
<?php
    $person = [
        "name" => "omkar",
        "Age" => 25,
        "mail" => "omkar@gmail.com",
        "City" => "Mumbai"
    ];
$person["name"] = 'ram';
    foreach($person as $key => $value) {
        echo "$key : $value  <br>";
    }
   
?>