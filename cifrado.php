<?php
require_once('defuse-crypto.phar');

use Defuse\Crypto\Exception\EnvironmentIsBrokenException;
use Defuse\Crypto\Exception\IOException;
use Defuse\Crypto\Exception\WrongKeyOrModifiedCiphertextException;
use Defuse\Crypto\File;
use Defuse\Crypto\Key;


$rutaArchivoEntrada = __DIR__ . "/passwords.txt";

$rutaArchivoSalida = __DIR__ . "/pass_cifrada.txt";

$contenido = file_get_contents("clave.txt");

$clave = Key::loadFromAsciiSafeString($contenido);
File::encryptFile($rutaArchivoEntrada, $rutaArchivoSalida, $clave);
echo "Archivo $rutaArchivoEntrada cifrado dentro de $rutaArchivoSalida";

?>