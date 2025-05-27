<?php
    //objet
    $object = [
        "name" => "Rani",
        "age" => "40",
        "gender" => "female"
    ];
    $data = json_encode($object);
    echo "The object type of json is <br>" .$data;


    //array of object
    $array = array(
       "1"=> array("name" => "Rani",
        "age" => "40",
        "gender" => "female"),
       "2"=>  array("name" => "Minu",
        "age" => "30",
        "gender" => "female"),
       "3"=>  array("name" => "Sunil",
        "age" => "30",
        "gender" => "male"),
    );
    $data_array = json_encode($array,true);
    echo "<br>The array type of json is <br>".$data_array;

    //nested object
    $nested_obj = array(
        "1"=> array("name" => "Rani",
         "age" => "40",
         "gender" => "female",
            "address" => array(
                "pincode"=>"784028",
                "city" => "Tezpur",
            )),
        "2"=>  array("name" => "Minu",
         "age" => "30",
         "gender" => "female",
            "address" => array(
                "pincode"=>"784028",
                "city" => "Tezpur",
            )),
        "3"=>  array("name" => "Sunil",
         "age" => "30",
         "gender" => "male",
            "address" => array(
                "pincode"=>"784028",
                "city" => "Tezpur",
            )),
     );
     $data_nested_obj = json_encode($nested_obj);
     echo "<br>The nested object type of json is <br>".$data_nested_obj;

?>