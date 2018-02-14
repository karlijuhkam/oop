<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 12.02.2018
 * Time: 09:50
 */

$username = $http->get('username');
$password = $http->get('password');
// koostame päring kasutaja kontrollimiseks
$sql = 'SELECT * FROM user '.
    'WHERE username='.fixDb($username).
    ' AND password='.fixDb(md5($password));
$result = $db->getData($sql);
// kontrollime, kas andmed on olemas
if($result != false){
    // kasutajale tuleb avada töösessioon
    echo 'Oled sisselogitud<br />';
} else {
    // tuleb kasutajat suunata tagasi
    // sisselogimisvormile
    $link = $http->getLink(array('control' => 'login'));
    $http->redirect($link);
}