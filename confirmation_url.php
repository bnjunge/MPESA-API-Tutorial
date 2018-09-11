<?php
    header("Content-Type: application/json");

    $response = '{
        "ResultCode": 0, 
        "ResultDesc": "Confirmation Received Successfully"
    }';

    // Response from M-PESA Stream
    $mpesaResponse = file_get_contents('php://input');

    // log the response
    $logFile = "M_PESAConfirmationResponse.txt";


    $jsonMpesaResponse = json_decode($mpesaResponse, true); // We will then use this to save to database

    // write to file
    $log = fopen($logFile, "a");

    fwrite($log, $mpesaResponse);
    fclose($log);

    echo $response;
?>
