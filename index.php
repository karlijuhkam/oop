<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 19.01.2018
 * Time: 11:09
 */

require_once 'conf.php';

// loome peamalli objekti template klassist
$mainTmpl = new template('main');
// määrame reaalväärtused malli elementidele
$mainTmpl->set('lang', 'et');
$mainTmpl->set('page_title', 'Lehe pealkiri');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');

//nõuame controllerite haldust
require_once 'control.php';

require_once 'menu.php';

echo $mainTmpl->parse();
$db->getData('SELECT NOW()');

echo '<pre>';
print_r($result);
echo '</pre>';
