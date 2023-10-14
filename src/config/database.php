<?php 


//Criando conexao com o banco de dados:
class Database {
    public static function getConnection(){
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'],$env['username'],$env['password'],$env['database']);

        if($conn -> connect_error) {
            die("Erro:" .$conn->connect_error);
        }

        return $conn;
    }

    //Trazendo resultado da consulta 
    public static function getResultFromQuery($sql){
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public static function executeSql($sql){
        $conn = self::getConnection();
        
        if(!$conn->query($sql)){
            throw new Exception($conn->error);
        }
        
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }
    
}