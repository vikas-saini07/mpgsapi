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
var display_split_strings = '<p>After executing the split method: <span> src_str.split(".");</span></p>';
for (num=0; num < str_spl.length; num++){
    display_split_strings += str_spl[num] + "<BR>";
    }
    document.getElementById("splitted_string").innerHTML = display_split_strings;
</script>

</body>
</html>
