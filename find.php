<?php
      require_once __DIR__ . '/vendor/autoload.php';
    
      $client = new MongoDB\Client;
  
      $db =  $client->dbCommany;
        
      $table = $client->dbCommany->etudiant;

      $recherche =  $table->find([
        'name' => 'franck'
      ]);

      foreach ($recherche as  $value) 
      {
            var_dump($value);
      }
    //   var_dump($recherche);
?>