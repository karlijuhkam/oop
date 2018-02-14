<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 14.02.2018
 * Time: 14:53
 */

class session
{
    var $sid = false; // sessioni id
    var $vars = array(); //sessiooni ajal tekkinud andmed
    var $http = false; //http objekit jaoks
    var $db = false; //db objekti jaoks

    var $timeout = 1800; //aeg sekundides sessioni lõpetamiseks
    var $anonymous = true;

    /**
     * session constructor.
     * @param bool $http
     * @param bool $db
     */
    public function __construct(&$http, &$db)
    {
        $this->http = $http;
        $this->db = $db;
        $this->sessionCreate();
    }  //anonüümne sessioon

    //loome sessiooni
    function sessionCreate($user = false){
        //anonüümse sessiooni loomine
        if($user == false){
            //tekitame kasutaja andmd andmebaasi jaoks
            $user = array(
              'user_id'=> 0,
              'role_id'=> 0,
              'username'=>'Anonymous'
            );
            //loome sid
            $sid = md5(uniqid(time().mt_rand(1,1000)));
            //salvestame andmed andmebaasi
            $sql = 'INSERT INTO session SET sid='.fixDb($sid).', user_id='.fixDb($user('user_id')).', user_data='.fixDb(serialize($user)).', login_ip='.fixDb(REMOTE_ADDR).', created=NOW()';
            // saadame pärinug andmebaasi
            $this->db->query($sql);
            //määrame sid $this->sid
            $this->sid=$sid;
            //lisame andmed http sisse et nad oleks veebi kätte saadavad
            $this->http->set('sid',$sid);

        }
    }
}