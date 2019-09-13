<?php

$curl = curl_init();
$username = "merchant.VICTOR01";
$password = "1b8e9f6f7bf4c68b71f11e3eb5ce8cbb";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://test-gateway.mastercard.com/api/rest/version/52/merchant/VICTOR01/3DSecureId/2004123585Q",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "{ \r\n \"apiOperation\": \"CHECK_3DS_ENROLLMENT\", \r\n \"order\": { \r\n \"amount\": \"11.0\", \r\n \"currency\": \"AUD\" \r\n }, \r\n \"3DSecure\": { \r\n \"authenticationRedirect\": { \r\n \"responseUrl\": \"https://victor-test-app123.herokuapp.com/3dsRedirect.php\",\r\n \"pageGenerationMode\": \"CUSTOMIZED\"\r\n } \r\n }, \r\n \"sourceOfFunds\":{\r\n        \"provided\":{\r\n            \"card\":{\r\n                \"number\":\"5123450000000008\",\r\n                \"expiry\":{\r\n                    \"month\":\"05\",\r\n                    \"year\":\"21\"\r\n                }\r\n            }\r\n        }\r\n\r\n        \r\n    }\r\n} ",
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic ' . base64_encode("$username:$password")),
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
