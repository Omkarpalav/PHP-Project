
<?php
    $person = array(
        "name" => "omkar",
        "Age" => 25,
        "City" => "Mumbai"
    );

    // Shorthand
    $person = [
        "name" => "omkar",
        "Age" => 25,
        "City" => "Mumbai"
    ];

   // Accessing Values in an Associative Array
    echo $person["Age"],"<br>";
    print_r($person["name"], "<br>");


    foreach($person as $key => $value) {
        echo "$key : $value <br>";
    }

    // Modifying Associative Arrays
    $person["name"] = "Ram";
    
    // foreach($person as $key => $value) {
    //     echo "$key : $value <br>";
    // }

    // Removing a Key-Value Pair
    unset($person["City"]);
    foreach($person as $key => $value) {
        // echo "$key : $value <br>";
    }

    // Common Functions for Associative Arrays
    // 1. array_keys() :  Returns all the keys in the array.
    $key = array_keys($person);
    // print_r($key);
    foreach($key as $k) {
        echo "key of Array : " . $k . "<br>";
    }

    // 2. array_values() :  Returns all the values in the array.
    $values = array_values($person);
    foreach($person as $val){
        echo "Values of Array : " . $val .  "<br>";
    }
?>