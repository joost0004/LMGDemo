<?php
// include database connection config
require 'database.php';

// Get all orders and store in variable
$data = $database->select('orders', '*');

// set breadcrumbs
$breadcrumbs = [
    ['url' => 'index.php', 'label' => 'Home'],
];

$pageContent = "
<!-- Header -->
<h1>Bestellingen Overzicht</h1>
<p>Dit is een overzicht van alle bestellingen.</p>

<!-- Tabel met bestellingen -->
<table class='table'>
    <thead>
        <tr>
            <th>Bestelling ID</th>
            <th>Naam</th>
            <th>Emailadres</th>
            <th>Status</th>
            <th>Besteldatum</th>
            <th>Bekijk order</th>
        </tr>
    </thead>
    <tbody>";
    
// For each loopje om alle rows toe te voegen uit $order object
foreach ($data as $order) {
    $pageContent .= "
        <tr>
            <th>{$order['id']}</th>
            <td>{$order['name']}</td>   
            <td>{$order['email']}</td>   
            <td>{$order['status']}</td>   
            <td>{$order['created']}</td> 
            <td><a href='view.php?id={$order['id']}'><button class='btn btn-primary'>👁</button></a></td>
        </tr>";
}

$pageContent .= "
    </tbody>
</table>
";

// include template
include 'template.php';
?>
