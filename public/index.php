<?php

/**
 * The Mild PHP Framework
 *
 * @package Mild
 * @license MIT
 * @version 1.0
 * @author Mochammad Riyadh Ilham Akbar Pasya <ipa@voxteneo.asia>
 */

define('MILD_START', microtime(true));

require '../vendor/autoload.php';

$app = require_once '../bootstrap/app.php';

$app->make(\Mild\Http\Kernel::class)
    ->handle(\Mild\Http\Factory::createServerRequestFromGlobals())
    ->send();