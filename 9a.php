<html>
<head><title>Pattern Matching </title></head>
<body>
<?php
$res = shell_exec("python 9.py");
// echo $res;
$states = explode("\n",$res);

echo "Statements is: <b>".$states[4]."</b></br>";
echo "end with xas  <b>".$states[0]."</b></br>";
echo "starts with k and end with s  <b>".$states[1]."</b></br>";
echo "starts with M and end with s <b>".$states[2]."</b></br>";
echo "end with a  <b>".$states[3]."</b></br>";


?>
</body>
</html>