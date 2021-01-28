

<?php

print "<h3 style=color:red> Refresh page </h3>";
$name = "counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "<center style=color:red >Total number of viwes: ".$hits[0]."</center>";
// echo  "<center>Total number of viwes: ".$hits[0]."</h3>";

?>
