<!DOCTYPE html>
<html>
<body>

<div id="id01"></div>
<script>

myFunction([
{
"display": "JavaScript Tutorial",
"url": "http://10.224.41.42/brock/get_text/select_data.php"
},
{
"display": "HTML Tutorial",
"url": "http://www.w3schools.com/html/default.asp"
},
{
"display": "CSS Tutorial",
"url": "http://www.w3schools.com/css/default.asp"
}
]);

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i<arr.length; i++) {
        out += '<a href="' + arr[i].url + '">' + 
        arr[i].display + '</a><br>';
    }
    document.getElementById("id01").innerHTML = out;
}
</script>

</body>
</html>