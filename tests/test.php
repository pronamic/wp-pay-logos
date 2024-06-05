<?php

namespace Pronamic\WpPayLogos;

require __DIR__ . '/../vendor/autoload.php';

$image_service = new ImageService();

echo $image_service->get_path( 'ideal-issuers/rabobank/ideal-issuer-rabobank-mollie-32x24.svg' );
