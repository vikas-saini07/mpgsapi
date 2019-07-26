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
inclide 'checkout__BAIDURI_N_950028548_mastercard.php';
?>

<!DOCTYPE html>
<html>
<body>

<p>Click the button to display the path name of the current URL.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<p id="splitted_string"></p> 
</div>

<script>
function myFunction() {
  var x =   window.location.pathname;
  document.getElementById("demo").innerHTML = x;
}
var src_str = "Sentence 1. Sentence 2. Sentence 3";
var str_spl = src_str.split(".");
var num;
var display_split_strings = window.location.pathname;
for (num=0; num < str_spl.length; num++){
    display_split_strings += str_spl[num] + "<BR>";
    }
    document.getElementById("splitted_string").innerHTML = display_split_strings;
</script>

</body>
</html>
