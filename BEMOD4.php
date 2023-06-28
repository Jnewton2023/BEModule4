<?php

// Define constants
define('SALES_TAX_RATE', 6.35);

// Define multi-dimensional array for packages
$packages = [
    [
        'packageName' => 'Basic Detailing',
        'packageDescription' => '"Exterior wash, Interior vacuum, and floor mat cleaning"',
        'packagePrice' => 65.99,
    ],
    [
        'packageName' => 'Premium Detailing',
        'packageDescription' => 'Exterior quick wax, Leather/vinyl deep clean and conditioner',
        'packagePrice' => 99.99,
    ],
    [
        'packageName' => 'Diamond Detailing',
        'packageDescription' => 'Hand paste wax, Chrome and plastic polish/conditioning, full interior details',
        'packagePrice' => 149.99,
    ],
];

// Define variables of different data types
$customerName = 'John Wall';
$customerAge = 30;
$customerPhone = '4658782342';

// Define a function to calculate the total price after tax
function calculateTotalPrice($price)
{
    $totalPrice = $price + ($price * SALES_TAX_RATE / 100);
    return $totalPrice;
}

// Output the package details and customer information
echo "<h1>Auto Detailing Packages</h1>";

foreach ($packages as $package) {
    echo "<h2>{$package['packageName']}</h2>";
    echo "<p>{$package['packageDescription']} - {$package['packagePrice']} USD</p>";
    $totalPrice = calculateTotalPrice($package['packagePrice']);
    echo "<p>Total Price (incl. tax): {$totalPrice} USD</p>";
}

echo "<h1>Customer Information</h1>";
echo "<p>Name: {$customerName}</p>";
echo "<p>Age: {$customerAge}</p>";
echo "<p>Phone: {$customerPhone}</p>";

?>

