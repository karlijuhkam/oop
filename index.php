<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 19.01.2018
 * Time: 11:09
 */

//loeme sisse projekti onfiguratsiooni
require_once 'conf.php';
require_once 'menu.php';

//loome lehe põhiosa objekti
$mainTmpl = new template('main');


$mainTmpl->set('lang','et');
$mainTmpl->set('page_title','lehe_pealkiri');
$mainTmpl->set('user','Kasutaja');
$mainTmpl->set('title','Pealkiri');
$mainTmpl->set('lang_bar','Keeleriba');
$mainTmpl->set('menu','Lehe menüü');
$mainTmpl->set('content','lehe sisu');
$mainTmpl->set('menu',$menu);
echo $mainTmpl->parse();

