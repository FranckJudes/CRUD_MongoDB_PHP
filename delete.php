<?php
      require_once __DIR__ . '/vendor/autoload.php';
    
      $client = new MongoDB\Client;

      $database =  $client->dbCommany;

      $table =  $database -> etudiant;
      
      $result  = $table -> deleteMany([
        'name' => 'franck'
      ]);

      echo 'suppresion Reussi';