<!DOCTYPE html>
<html>
<body>

<?php
$string = "siska febrian lestari";
foreach (count_chars($string, 1) as $i => $val)
{
   echo "\"" , chr($i) , "\" : $val <br>";
}
?>

</body>
</html>