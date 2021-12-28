<?php
    class Conexion{
        
        private static $dbname="empleados_db";
        private static $host="localhost";
        private static $user="root";
        private static $password="";        

        private static $conn=NULL;

        public static function getConnection(){
            if(  !isset(self::$conn)  ){
                $opcPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$conn = new PDO(
                    "mysql:host=".self::$host.
                    ";dbname=".self::$dbname,
                    self::$user,
                    self::$password,
                    $opcPDO
                );                     
            }
            return self::$conn;
        }
    }
?>