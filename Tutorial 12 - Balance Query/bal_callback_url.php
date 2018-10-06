<?php

	$balResponse = file_get_contents('php://input');

  $logFile = "BalResponse.json";
  $log = fopen($logFile, "a");
  fwrite($log, $balResponse);
  fclose($log);
