<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 02.02.2018
 * Time: 10:49
 */

class mysql
{
    //klassi väljad
    var $conn = false; //yhendus andmebaasi serveriga
    var $host = false; //serveri nimi
    var $user = false; //kasutaja
    var $pass = false; //db kasutaja parool
    var $dbname = false;  //andmebaasi nimi

    /**
     * mysql constructor.
     * @param bool $host
     * @param bool $user
     * @param bool $pass
     * @param bool $dbname
     */
    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }

    //funktsioon mis loob ühenduse andmebaasiga
    function connect(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
        if($this->conn == false){
            echo "Probleem andmebaasi ühendamisega<br />";
            exit;
        }
    }

    //funktsioon päringu esitamiseks
    function query($sql){
        $result = mysqli_query($this->conn,$sql);
        if ($result == false){
            echo 'Probleem päringuga <br />';
            echo '<b>'.$sql.'</b>';
            return false;
        }
        return $result;


    }

    //funktsioon mis annab päringu andmed
    function getData($sql){
        $result = $this->query($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        if (count($data) == 0){
            return false;
        }
        return $data;
    }


}