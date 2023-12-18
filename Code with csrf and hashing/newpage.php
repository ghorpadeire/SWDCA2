<?php

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Key;

require 'vendor/autoload.php';

$key = Key::createNewRandomKey();
$message = 'Hello, this is a secret message!';

$encrypted = Crypto::encrypt($message, $key);
$decrypted = Crypto::decrypt($encrypted, $key);

echo "Original message: $message\n";
echo "Encrypted message: $encrypted\n";
echo "Decrypted message: $decrypted\n";

?>
