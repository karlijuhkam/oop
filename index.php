<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 19.01.2018
 * Time: 11:09
 */

//loeme sisse projekti onfiguratsiooni
require_once 'conf.php';

//loome lehe põhiosa objekti
$mainTmpl = new template('main');

//lisan objekti testvaade
echo '<pre>';
print_r($testTabel);
echo '</pre>';

$mainTmpl->set('lang','et');
$mainTmpl->set('page_title','lehe_pealkiri');
$mainTmpl->set('user','Kasutaja');
$mainTmpl->set('title','Pealkiri');
$mainTmpl->set('lang_bar','Keeleriba');
$mainTmpl->set('menu','Lehe menüü');
$mainTmpl->set('content','lehe sisu');
echo $mainTmpl->parse();