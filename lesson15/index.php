<?php
declare(strict_types=1);

require __DIR__ . '/app/EncryptionCaesar.php';

use Lesson15\App\EncryptionCaesar;

const KEY_FOR_ENCRYPTER = -1;
$encrypter = new EncryptionCaesar(KEY_FOR_ENCRYPTER);

echo $encrypter->encrypt('Andriy') . "\n";
//ndriyA