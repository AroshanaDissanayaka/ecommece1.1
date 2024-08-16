<?php

//Create Connection Class for Using project
class connection{

    public static $connection;


    public static function setupConnection(){
      
        if (!isset(connection::$connection)){

         connection:: $connection = new mysqli("localhost","root","DBMS@aroshana2024","e-commercewebapk","3306");

        }
    }


    public static function iud($q){

         connection::setupConnection();
         connection::$connection->query($q);



    }



    public static function search($q){

        connection::setupConnection();
        $resultset =  connection::$connection->query($q);

        return $resultset;



    }




}



?>