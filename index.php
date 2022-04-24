<?php

require_once 'vendor/autoload.php';
use App\Controllers\ProductController as PC;

$pC = new PC();
$pC->index();