<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 19.01.2018
 * Time: 09:44
 */

//kaustade ja failide konstantsed nimetused
define('MODEL_DIR','model/');
define('VIEW_DIR','views/');
define('CONTROL_DIR','controllers/');
define('LIB_DIR', 'libs/');
define('DEFAULT_CONTROL','default');

require_once LIB_DIR.'utils.php';

//määrame erinevad rollid
define('ROLE_NONE', 0);
define('ROLE_USER', 1);
define('ROLE_ADMIN',2);

//nõuame vajalike failide kasutamist
require_once MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';
require_once MODEL_DIR.'linkobjects.php';
require_once MODEL_DIR.'mysql.php';


//nõuame vajalikua abionfiguratsioonid
require_once 'db_conf.php';

$http = new linkobject();

//andmebaasi objekt
$db = new mysql(DB_HOST,DB_USER,DB_PASS,DB_NAME);


