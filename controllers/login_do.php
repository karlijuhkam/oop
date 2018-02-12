<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 12.02.2018
 * Time: 09:50
 */

$username = $http->get('username');
$password = $http->get('password');

//koostame pärinug kasutaja kontrollimiseks
$sql = 'SELECT * FROM user where username='.fixDb($username).' AND password='.fixDb(md5($password));
echo $sql;