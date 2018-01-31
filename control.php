<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 31.01.2018
 * Time: 09:36
 */

$control = $http->get('control'); //saame teada millise nimega kontrollerit on vaja
//koostan vastava faili nimi, kus kontrolleri sisu asub
$file = CONTROL_DIR.$control.'.php';
if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROL.'.php';
    require_once $file;
}

