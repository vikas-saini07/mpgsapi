<?php
 
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'sbpb_NGUzNDA0MmUtYTdhOS00NDA1LWI3NTUtNTA0YzRiMmY1OTNl';
Simplify::$privateKey = 'sQYcksCm3TgkBwIqlXu2MkHqImdK7mA7gl53aVjUmJ95YFFQL0ODSXAOkNtXTToq';
 
$payment = Simplify_Payment::createPayment(array(
        'amount' => '1000',
        'token' => '[TOKEN ID]',
        'description' => 'payment description',
        'reference' => '7a6ef6be31',
        'currency' => 'AUD'
));
 
if ($payment->paymentStatus == 'APPROVED') {
    echo "Payment approved\n";
}
 
?>
