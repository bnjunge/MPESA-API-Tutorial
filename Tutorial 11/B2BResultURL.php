<?php

  $callbackResponse = file_get_contents('php://input');
  $logFile = "B2BCallbackResponse.json";
  $log = fopen($logFile, "a");
  fwrite($log, $callbackResponse);
  fclose($log);
