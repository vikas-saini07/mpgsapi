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
<head></head>
<body> 
<!-- Populate the form action attribute with the value returned in the 3DSecure.authenticationRedirect.customized.acsUrl response parameter -->

 <form name="3dsRedirect" action="[3DSecure.authenticationRedirect.customized.acsUrl]" method="POST" accept-charset="UTF-8">

 <!-- Populate the mandatory PaReq parameter with the value returned in the 3DSecure.authenticationRedirect.customized.paReq response parameter.  -->

 <input type="hidden" name="PaReq" value="[3DSecure.authenticationRedirect.customized.paReq]"/>

 <!-- Populate the mandatory TermUrl value with the URL to which you want the payer returned when the authentication process has completed. This should be the same value as supplied in the 3DSecure.authenticationRedirect.responseUrl  parameter to the CHECK_ENROLLMENT request. -->

 <input type="hidden" name="TermUrl" value="https://victor-test-app123.herokuapp.com/3dsRedirect.php"/>

 <!-- The ACS will echo the contents of the mandatory MD parameter when the payer is returned to the URL specified in the TermUrl parameter.  You can use this parameter to establish a link between the ACS request and response. -->

 <input type="hidden" name="MD" value="[mdvalue]"/>

 <input type="submit" value="Click  here to continue" class="button">

 </form>
 </body> 
</html>
