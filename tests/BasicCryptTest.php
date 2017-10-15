<?php

require_once __DIR__ . '/../Cryptor.php';

$data = 'Good things come in small packages.';
$key = '9901:io=[<>602vV03&Whb>9J&M~Oq';

$encrypted = Cryptor::getDefaultEncryptor()->encrypt($data, $key);
$decrypted = Cryptor::getDefaultEncryptor()->decrypt($encrypted, $key);

assert(strlen($data) === strlen($decrypted), 'The decrypted data will match the binary size of the encrypted data');

assert($data === $decrypted, 'The encrypted data will match the decrypted data');