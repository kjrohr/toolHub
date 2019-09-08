<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php
include_once "includes/header.php";
include_once "includes/helper.php";
$setList = fillSelectForm();

?>

<form>
    <select>
        <?php 
            
            for ($i = 0; $i < count($setList); $i++){
                $set = $setList[$i];
                echo "<option value='$set'>$set</option>";
            }
        ?>
    </select>
</form>
    
</body>
</html>