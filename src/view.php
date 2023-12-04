<?php
// include database connection config
require 'database.php';

// check if id parameter is set in the URL
if (isset($_GET['id'])) {
    // Use database connection to fetch order based on given ID
    $orderId = $_GET['id'];
    $order = $database->get('orders', '*', ['id' => $orderId]);
} else {
    // Redirect to home if no id
    header('Location: index.php');
    exit();
}

// Variable to store the class based on given status
$statusClass = GetStatus($order['status']);

function GetStatus($status) {
    switch ($status) {
        case 'cancelled':
            return 'bg-danger text-white';
        case 'expired':
            return 'bg-warning text-dark';
        case 'paid':
            return 'bg-success text-white';
        default:
            return 'bg-secondary text-white';
}};

// set breadcrumbs   
$breadcrumbs = [
    ['url' => 'index.php', 'label' => 'Home'],
    ['url' => 'index.php', 'label' => 'Orders'],
    ['url' => '#', 'label' => $order['name']], // current page
];

// HTML for the page
$pageContent = "
<!-- Header -->
<h1 class='mt-4 mb-4'>Bestelling Bekijken</h1>

<!-- Display the details of the selected order using Bootstrap cards -->
<div class='card'>
    <div class='card-header'>
        Bestelling ID: {$order['id']}
    </div>
    <div class='card-body'>
        <h5 class='card-title'>Naam: {$order['name']}</h5>
        <p class='card-text'>Emailadres: {$order['email']}</p>
        <p class='card-text'>Status: <span class='badge {$statusClass}'>{$order['status']}</span></p>
        <p class='card-text'>Besteldatum: {$order['created']}</p>
    </div>
</div>
";

// include template
include 'template.php';
?>
