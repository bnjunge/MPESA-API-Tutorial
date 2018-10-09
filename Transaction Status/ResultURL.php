<?php

  $callbackResponse = file_get_contents('php://input');

  $logFile = "transaction_status.json";
  $log = fopen($logFile, "a");
  fwrite($log, $callbackResponse);
  fclose($log);
