<?php

    require_once __DIR__ . '/vendor/autoload.php';
    
    $client = new MongoDB\Client;

    $db =  $client->dbCommany;
    
    $table = $db->etudiant;

    $insertion = $table->insertOne(
      [
        'name' => 'franck',
        'age' => '20',
        'skill' => 'PHP',
        'formation' => 'certification'
      ]  
    );
    
    
    echo 'Insertion Reussi '. $insertion->getInsertedCount();

?>