<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening($email, $street, $streetNum, $city, $zipCode) {
    echo "<h3>Order Info:</h3><br/>";
    echo  "Email: $email <br/>";
    echo  "Street: $street <br/>";
    echo  "Street nr: $streetNum <br/>";
    echo  "City: $city <br/>";
    echo  "Zip code: $zipCode <br/>";
}


// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Coca cola', 'price' => 2],
    ['name' => 'Coffee', 'price' => 2.5],
    ['name' => 'Lemonade', 'price' => 1],
    ['name' => 'Red bull', 'price' => 1.5],
];
  
foreach ($products as $prod => $value) {
    echo $prod . "\n";
    foreach ($value as $sub_key => $sub_val) {
                  
        // If sub_val is an array then again
        // iterate through each element of it
        // else simply print the value of sub_key
        // and sub_val
        if (is_array($sub_val)) {
            echo $sub_key . " : \n";
            foreach ($sub_val as $k => $v) {
                echo "\t" .$k . " = " . $v . "\n";
            }
        } else {
            echo $sub_key . " = " . $sub_val . "\n";
        }
    }
}

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