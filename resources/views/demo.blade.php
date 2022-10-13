<?php
session_start();

$f_name = validate_data($_COOKIE["f_name"]);
$l_name = validate_data($_COOKIE["l_name"]);
$location = validate_data($_COOKIE["location"]);
$phone = validate_data($_COOKIE["phone"]);
$email = validate_data($_COOKIE["email"]);

$company_name = validate_data($_COOKIE["company_name"]);
$company_do = validate_data($_COOKIE["company_do"]);
$describe_business = validate_data($_COOKIE["describe_business"]);
$currency = validate_data($_COOKIE["currency"]);
$estimate_revenue = validate_data($_COOKIE["estimate_revenue"]);
$long_service = validate_data($_COOKIE["long_service"]);
$current_bill = validate_data($_COOKIE["current_bill"]);

echo $f_name . "<br>";
echo $l_name . "<br>";
echo $location . "<br>";
echo $phone . "<br>";
echo $email . "<br>";

echo $company_name . "<br>";
echo $company_do . "<br>";
echo $describe_business . "<br>";
echo $currency . "<br>";
echo $estimate_revenue . "<br>";
echo $long_service . "<br>";
echo $current_bill . "<br>";

function validate_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
