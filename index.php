<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Coca cola', 'price' => 2],
    ['name' => 'Coffee', 'price' => 2.5],
    ['name' => 'Lemonade', 'price' => 1],
    ['name' => 'Red bull', 'price' => 1.5],
];


function address($city, $street, $streetNum){
  echo "<h3>Address:</h3><br/>";
  echo "City: $city <br/> Street: $street <br/> Street num: $streetNum <br/>";
}

if(!empty($_POST["city"]) && !empty($_POST["street"]) && !empty($_POST["streetNumber"])){
  address($_POST["city"], $_POST["street"],$_POST["streetNumber"]);
}else{
  echo "The fields should not be empty <br/>";
}

function orderInfo($products){
    echo "<h3>Order Info:</h3><br/>";
    if(!empty($_POST["products"])){
        foreach($_POST["products"] as $key => $value){
     print($products[$key]["name"]);
     
}

    }else{
        echo "You must select a product";
    }

}
orderInfo($products);




  


$totalValue = 0;

function validate()
{
    // This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}
require 'form-view.php';