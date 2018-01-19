<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 19.01.2018
 * Time: 10:22
 */

class template
{
    // klassi muutujad
    var $file = ''; //HTML malli faili nimi
    var $content = false; // HTML malli failist loetud sisu
    var $vars = array();

    /**
     * template constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file; //määrame kastutadava malli faili nime
        $this->loadFile(); //laadime määratud nimega faili sisu
    }
    //HTML malli elementide nimetuste ja reaalväärtuste paarid

    //HTML malli faili nime ja õiguste kontroll ning sisu lugemine siis, kui vajalikud tingimused on täidetud
    function loadFile(){
        if(!is_dir(VIEW_DIR)){
            echo 'Ei ole leitud '.VIEW_DIR.' kataloogi.<br />';
            exit;
        }
        //Kui faili nimi on määratud kujul views/failinimi.html
        $file = $this->file;
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        //Kui faili nimi on määratud kujul failinimi.html
        $file = VIEW_DIR.$this->file;
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        //Kui faili nimi on määratud kujul failinimi
        $file = VIEW_DIR.$this->file.'.html';
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        //kui fail asub alamkaustas views/alamkaust/failinimi.html
        //failinimi määrtaud kujul alamkaust.failinimi
        $file = VIEW_DIR.str_replace('.','/',$this->$file).'.html';
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        //kui failisisu on ikkagi puudu
        if($this->content === false){
            echo 'Ei suutnud lugeda '.$this->file.' sisu.<br />';
            exit;
        }
    }


    //HTML malli failist sisu lugemine
    function readFile($file){
        //$fp = fopen($file, 'r');
        //$this->content = fread($fp, filesize($file));
        //fclose($fp);

        $this->content = file_get_contents($file);
    }

    //funktsioon ühe paari lisamiseks
    function set($name,$value){
        $this->vars() = $value;
    }
}