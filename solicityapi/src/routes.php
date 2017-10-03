<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $servername = "solicity156.cerfyxgmkzjp.sa-east-1.rds.amazonaws.com";
    $username = "solicity156";
    $password = "solicity156";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=Solicity156", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully3218739821"; 

        $stmt = $conn->prepare("SELECT * FROM Category"); 
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $args['result'] = $result;

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
