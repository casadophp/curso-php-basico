<?php

require_once "helpers/url.php";

$verificarUrl = verificaURL($_GET);

$parametroURL = obterParametros($verificarUrl, $_GET);

print_r($parametroURL);

// print_r($_GET);

echo 'Site';