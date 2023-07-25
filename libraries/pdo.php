<?php

//constantes d'environemment
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "garage_v_parrot");

    //DSN de connexion
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
    
    //securisation de conexion
    try{
      
      $pdo = new PDO($dsn, DBUSER, DBPASS);

      echo "On est connectés";

      
      $pdo->exec("SET NAMES utf8");

      
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch(PDOException $e){
      die($e->getMessage());
    }