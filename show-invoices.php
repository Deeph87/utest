<?php

require "vendor/autoload.php";

$invoice = new \MMI\Invoice();

$invoiceList = array(
    array(
        'mtht' => 5,
        'tva' => 10,
        'description' => 'yaourt'
    ),
    array(
        'mtht' => 1,
        'tva' => 5,
        'description' => 'pain'
    ),
    array(
        'mtht' => 7,
        'tva' => 15,
        'description' => 'chocolat'
    )
);

$total = $invoice->getTotal($invoiceList);
var_dump($total);

$invoiceList = array(
    array(
        'mtht' => 19999.99,
        'tva' => 12.23,
        'description' => 'Yamaha R1'
    ),
    array(
        'mtht' => 14999.24,
        'tva' => 10.48,
        'description' => 'Hoda CBR 1000'
    ),
    array(
        'mtht' => 17599.33,
        'tva' => 9.56,
        'description' => 'Suzuki GSX-R 1000'
    )
);

$total2 = $invoice->getTotal($invoiceList);
var_dump($total2);