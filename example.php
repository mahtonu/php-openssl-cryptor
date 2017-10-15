<?php

include_once 'Cryptor.php';

$data = 'Good things come in small packages.';
$key = '9901:io=[<>602vV03&Whb>9J&M~Oq';

//set the key once
//Cryptor::getDefaultEncryptor()->setKey($key);

//using the default key
$encrypted = Cryptor::getDefaultEncryptor()->Encrypt($data);

echo "'$data' (" . strlen($data) . ") => '$encrypted'\n\n";

//using the default key
$decrypted = Cryptor::getDefaultEncryptor()->Decrypt($encrypted);

echo "'$encrypted' => '$decrypted' (" . strlen($decrypted) . ")\n";
