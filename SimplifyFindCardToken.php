<?php
include '_bootstrap.php';
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'sbpb_NTFhMjA1YmMtMmQ3Ni00MTc3LTlhMDctODAwNDliYjA5NTU2';
Simplify::$privateKey = 'cj3VP22g5FuI0+z8fSe2iBSqOdPgjbXHv6Hse8aVNfN5YFFQL0ODSXAOkNtXTToq';
 
$obj  = Simplify_CardToken::findCardToken('4TR6Bc');
 
print_r($obj);
 
?>
