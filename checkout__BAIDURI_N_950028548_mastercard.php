<?php

/*
 * Copyright (c) 2016 Mastercard
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

include '_bootstrap.php';
?>
<!DOTYPE html>
<html> 
<!--"https://paymentgateway.commbank.com.au/checkout/version/40/checkout.js"--> 
<head> 
<script src="https://baiduri-bpgs.mtf.gateway.mastercard.com/checkout/version/46/checkout.js" 
data-error="errorCallback" 
data-cancel="cancelCallback" 
<!--data-complete="completeCallback" -->
<!--data-timeout="timeoutCallback"-->
data-beforeRedirect="Checkout.saveFormFields" 
data-afterRedirect="Checkout.restoreFormFields"> 
</script> 
<script type="text/javascript"> 
function myFunction() { 
var x = Math.floor((Math.random() * 100000) + 1000); 
var n = x.toString(); 
//var document.getElementById("demo").innerHTML = x; 
} 
</script> 

<script type="text/javascript"> 
    var sessionId = "SESSION0002968813573M56668701G2";
    var sessionVersion = "31774e3d01";
    var successIndicator = "4f5f2056c30a49a6";
	
var x = Math.floor((Math.random() * 100000) + 1000); 
var n = x.toString(); 
function errorCallback(error) { 
console.log("Error: " + JSON.stringify(error)); 
}
 function timeoutCallback() {
                //handle payment timeout
				console.log("Calling timeout."); 
            };
function cancelCallback() { 
console.log('Payment cancelled'); 
confirm('Are you sure you want to cancel?'); 
} 
// or if you want to provide a URL: 
cancelCallback = "http://www.bbc.com/"; 
/*function completeCallback(response) {
        // Save the resultIndicator
		console.log("Calling completecallback"); 
        resultIndicator = response;
        var result = (resultIndicator === successIndicator) ? "SUCCESS" : "ERROR";
		console.log(result); 
        //location.href = "https://www.google.com";
		window.location.href = "https://www.google.com" + "/" + orderId + "/" + result;
    }*/
var text = Checkout.configure({ 
merchant:'TEST950029025',
//lineOfBusiness:'test_socks',
//'VICTOR01', 
//'TESTPAPFACEVAL01', 
order: { 
amount: function() { 
//Dynamic calculation of amount 
return 80 + 25; 
}, 
currency: 'BND', 
description: 'Ordered goods', 
id: JSON.stringify(n) 
}, 
interaction: {
//operation: 'PURCHASE', 
merchant: { 
'name': 'tessie', 
address: { 
line1: '200 Sample St', 
line2: '1234 Example Town' 
} 
} 
},
session: {
		    id: sessionId
            //version: sessionVersion
		 }
 
}); 
obj = JSON.parse(text); 
document.getElementById("demo2").innerHTML = 
obj.Checkout.configure.order.id; 
</script> 
</head> 
<body> 
... Master card: 5123450000000008<br>
More test cards: <a href="https://baiduri-bpgs.mtf.gateway.mastercard.com/api/documentation/integrationGuidelines/supportedFeatures/testAndGoLive.html?locale=en_US" target="_blank">Click here<a/><br>
China Union Pay: 
<a href="https://baiduri-bpgs.mtf.gateway.mastercard.com/api/documentation/integrationGuidelines/supportedFeatures/pickPaymentMethod/browserPayments/testDetails.html?locale=en_US#x_SecurePayTest" target="_blank">Click for test cards<a/><br>
<input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" /> 
<input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" /> 
... 
<button onclick="myFunction()">Try it</button> 

<p id="demo"></p> 

<p id="demo2"></p> 
</body> 
</html> 