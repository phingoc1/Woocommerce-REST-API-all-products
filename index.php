<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    $_ENV['DOMAIN'], 
    $_ENV['CK'], 
    $_ENV['CS'],
    [
        'version' => 'wc/v3',
    ]
);


$products = array();

for($i = 1; $i < 100000; $i++) {

	$productsQry = $woocommerce->get('products', array('per_page'=>100, 'page'=>$i));
	$products = array_merge($products, $productsQry);

	if(count($productsQry) != 100) {
		break;
	}

}

echo count($products);