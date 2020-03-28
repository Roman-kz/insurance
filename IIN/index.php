<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IIN-test</title>
</head>
<body>
    <form method="POST" action="prog.php">
    <input type="text" name="IIN"  placeholder="IIN">  <br>
    <input type="submit">
    </form>

    <?php 
    if($_SESSION['Error']){
        echo 'IIN: ';
        echo $_SESSION['IIN'];
        echo '<br>';
        echo 'Day:';
        echo $_SESSION['Day'];
        echo '; Month:';
        echo $_SESSION['Month'];
        echo '; Year:';
        echo $_SESSION['Year'];
        echo '<br>';
        echo 'Floor: ';
        echo $_SESSION['Floor'];
        echo '<br>';
    }
    elseif(isset($_SESSION['Day'])){
        echo 'Error IIN<br>';
    }
    ?>
    <a href="session_destroy.php">clear</a>


</body>
</html>