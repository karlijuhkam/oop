<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 12.02.2018
 * Time: 08:56
 */

//loome sisselogimise vormi objekti
$loginForm = new template('login');
//paneme paika vajalikud väärtused malli sisustamiseks
$loginForm->set('kasutaja','Kasutajanimi:');
$loginForm->set('parool','Parool:');
$loginForm->set('nupp','Logi sisse!');
//paneme väärtused malli
$mainTmpl->set('content', $loginForm->parse());