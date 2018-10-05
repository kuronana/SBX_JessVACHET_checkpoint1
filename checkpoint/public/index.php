<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 05/10/18
 * Time: 10:36
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Controller/contactController.php';

$plop = new \Controller\contactController();

$plop->newContact();
$plop->Person();



