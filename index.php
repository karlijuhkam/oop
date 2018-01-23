<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 19.01.2018
 * Time: 11:09
 */

//loeme sisse projekti onfiguratsiooni
require_once 'conf.php';

//proovime luua testobjekti template klassist
$testTabel = new template('test');

//lisan objekti testvaade
echo '<pre>';
print_r($testTabel);
echo '</pre>';

$testTabel->set('esimine','1');
$testTabel->set('teine','2');

echo $testTabel->parse();