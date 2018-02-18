<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Main;

/**
 * Description of createTable
 *
 * @author abarmodd
 */
class createTable {
    //put your code here
    private $load;
    private $out;
    private $error;


    public function __construct() {
//        $this->load = $this->loadData();
//        if(!$this->load){
//            $this->create($this->load);
//        }else{
//            $this->error = "ERROR!!!";
//        }
        $this->loadData();
    }
    protected function create() {
        $sql = "CREATE TABLE IF NOT EXISTS `worked`.`filelist` ( `id_file` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
                 `name_file` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
                 `size_file` INT UNSIGNED NOT NULL , `date_added_file` TIMESTAMP NOT NULL ,
                 `path` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
                 PRIMARY KEY (`id_file`),
                 UNIQUE (`name_file`, `path`))
                 ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;";
        $sql = "INSERT INTO $load";
    }
    
    protected function loadData() {
        function read_dir() {
//            if ($dir = opendir('/home/abarmodd/web/worked.loc/tmp/files')) {
//                while (false !== ($a = readdir($dir))) {
//                    if ($a != "." && $a != "..") {
//                        if(is_dir($a)){
//                            read_dir($a);
//                            echo '2';
//                        }elseif(is_file($dir . '/' .$a)){
//                            echo '3';
//                            echo basename($a);
//                        }  else {
//                            echo 'HZ!';
//                        }
//                    }
//                }    
//            }
            $files = scandir("tmp/files");
            print_r($files);
        }
        read_dir();
        $sql = "SELECT * FROM";
    }
    
    private function sql_escape($data) {
        //
    }

    private function mysql_query($sql) {
        //
        return real_escape_string($sql);
    }

    public function getData() {
        return $this->out;
    }
}
