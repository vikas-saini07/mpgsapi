<?php
include '_bootstrap.php'; 
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'sbpb_NTFhMjA1YmMtMmQ3Ni00MTc3LTlhMDctODAwNDliYjA5NTU2';
Simplify::$privateKey = 'cj3VP22g5FuI0+z8fSe2iBSqOdPgjbXHv6Hse8aVNfN5YFFQL0ODSXAOkNtXTToq';
 
$cardToken = Simplify_CardToken::createCardToken(array(
        'card' => array(
           'addressState' => 'MO',
           'expMonth' => '11',
           'expYear' => '35',
           'addressCity' => 'OFallon',
           'cvc' => '123',
           'number' => '5105105105105100'
        )
));
 
print_r($cardToken);
 
?>
