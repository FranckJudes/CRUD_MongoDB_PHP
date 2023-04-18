<?php
    
    require_once __DIR__ . '/vendor/autoload.php';
    
    $db =  new MongoDB\Client;
    
    $database = $db -> dbCommany;
    $table = $database->etudiant;

    $result = $table->updateOne([
        ['formation' => 'certification'],
        ['$set' => ['name' => 'franck']] 
    ]);

   
    $result1 = $table->find();
    foreach ($result1 as  $value) 
    {
        var_dump($value);
    }
    