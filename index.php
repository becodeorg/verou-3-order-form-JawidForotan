<?php


// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Coca cola', 'price' => 2],
    ['name' => 'Coffee', 'price' => 2.5],
    ['name' => 'Lemonade', 'price' => 1],
    ['name' => 'Red bull', 'price' => 1.5],
];

// Print the element of multidimensional array

function orderInfo($products){
    echo "<h3>Order Info:</h3><br/>";
        foreach($_POST["products"] as $key => $value){
     print($products[$key]["name"]."<br/>");
     
}
}

$totalValue = 0;
function totalPrice($products){
    echo "<h3>Total:</h3><br/>";
        foreach($_POST["products"] as $key => $value){
      $price = ($products[$key]["price"]."<br/>");
      global $totalValue;
      $totalValue += (float)$price;
}
return "Total: $totalValue € <br/>";
}

// Variables and set to empty values.
$email = $street = $streetNumber = $city = $zipCode = ""; 

// Remove extra space, tab, new line, backslash ...
function checkInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Get delivery address
function address(){
  echo "<h3>Address:</h3><br/>";
  $city = checkInput($_POST["city"]);
  $street = checkInput($_POST["street"]);
  $streetNum = checkInput($_POST["streetNumber"]);
  echo "City: $city <br/> Street: $street <br/> Street num: $streetNum";
}

$emailErr = $cityErr = $streetErr = $streetNumErr = $zipCodeErr = $productsErr = "";


function validate()
{
    
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
require("./form-view.php");