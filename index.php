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
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <style>
            body {
                padding: 3rem;
            }
        </style>
    </head>
    <body>
        <h1>Gateway Test Merchant Server</h1>
        <p>This is an sample application to help developers start building mobile applications using the Gateway mobile SDK.</p>
        <h3>Available APIs</h3>
        <ul>
            <li><a href="./session.php">Session API</a></li>
            <li><a href="./transaction.php">Transaction API</a></li>
            <li><a href="./3DSecure.php">3DSecure API</a></li>
            <li><a href="./HostedCheckoutsreeja.php">HostedCheckout sreeja</a></li>
            <li><a href="./CreateSessionsreeja.php">CreateSession sreeja</a></li>
            <li><a href="./Check3DSEnrollment.php">Check for 3DS Enrollment</a></li>
            <li><a href="./3dsRedirect.html">responseUrl</a></li>
            <li><a href="./simplesessionNEW.php">Create Session</a></li>
            <li><a href="./checkoutsessionBAIDURIMPGS.php">Create Checkout Session</a></li>
            <li><a href="./checkout__BAIDURI_N_950028548_mastercard.php">Pass Checkout Session with Hosted Checkout</a></li>
            <li><a href="./HostedSessionTESTVICTOR01_53.html">Create/Update Session (Hosted Session)</a></li>
            <li><a href="./threeds2.html">3DS JavaScript API with Session</a></li>
        </ul>
    </body>
</html>
