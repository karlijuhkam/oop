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

require_once LIB_DIR.'utils.php';
//nõuame vajalike failide kasutamist
require_once MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';
require_once MODEL_DIR.'linObjects.php';
$http = new linObjects();
