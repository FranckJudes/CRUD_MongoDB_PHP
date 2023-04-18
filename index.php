<?php
      require_once __DIR__ . '/vendor/autoload.php';
      
      $client = new MongoDB\Client("mongodb://localhost:27017");
      
      
      foreach ($client->listDatabases() as $database)
      {
         print_r($database);
      }
      
      //   echo "Connexion reussi"; 
      
      // Creation de Base de donnee  et Selectionne de la Base de donnee
    //   $db  =  $client->dbCommany;

    //   $result = $db->createCollection("Newcollection");

    //  foreach ($db->listCollections() as $value) 
    //  {
    //         var_dump( $value);
    //  }