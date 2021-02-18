<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center> 
<?php

print "<p>El seu nom és :  $_REQUEST[nom]</p>\n";
print "<p>El seu cognom és : $_REQUEST[cognom]</p>\n";
print "<p>La seva data de naixement és :  $_REQUEST[data]</p>\n";
print "<p>El seu sexe és :  $_REQUEST[sex]</p>\n";
print "<p>Ha seleccionat :  $_REQUEST[opciones]</p>\n";
print "<p>Checkbox :  $_REQUEST[consentiment]</p>\n";

?>
</center>
</body>
</html>