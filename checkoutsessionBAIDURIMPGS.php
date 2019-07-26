<?php
 
$curl = curl_init();
 
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://test-gateway.mastercard.com/api/nvp/version/41",
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_CHECKOUT_SESSION&merchant=TESTVICTOR01&apiUsername=merchant.TESTVICTOR01&apiPassword=cef2d7619cf1535c6b5320ee277a88ed&order.currency=AUD&order.id=546098PHTP45&order.amount=55&interaction.returnUrl=https%3A%2F%2Ftigris-eden.com%2Fthanks",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode("merchant.TESTVICTOR01:cef2d7619cf1535c6b5320ee277a88ed")
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>