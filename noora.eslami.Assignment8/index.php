<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="StyleTable">
        <h1>جدول ضرب</h1>      
<?php 
echo "<table class=Table>" ;
 for($i=1;$i<=9 ;$i++){
    echo "<tr>";
    for($j=0;$j<=9 ;$j++){
    echo "<td>".$i*$j."</td>";
    }
     echo "<tr>";
 }
echo "</Table>";
?>
    </div>
</body>
</html>