<?php
 
require_once("./lib/Simplify.php");
require_once("./SimplifyPaymentForm.php"); 
Simplify::$publicKey = 'sbpb_NTFhMjA1YmMtMmQ3Ni00MTc3LTlhMDctODAwNDliYjA5NTU2';
Simplify::$privateKey = 'cj3VP22g5FuI0+z8fSe2iBSqOdPgjbXHv6Hse8aVNfN5YFFQL0ODSXAOkNtXTToq';
 
$payment = Simplify_Payment::createPayment(array(
        'amount' => '10000',
        'token' => '[TOKEN ID]',
        'description' => 'payment description',
        'reference' => '7a6ef6be31',
        'currency' => 'AUD'
));
 
if ($payment->paymentStatus == 'APPROVED') {
    echo "Payment approved\n";
}
 
?>
