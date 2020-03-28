<?php
session_start();
$_SESSION['Error'] = false;
if((strlen($_POST['IIN']) == 12) and ((($_POST['IIN'][2].$_POST['IIN'][3]*1) < 13) and (($_POST['IIN'][2].$_POST['IIN'][3]*1) > 0)) and ((($_POST['IIN'][4].$_POST['IIN'][5]*1) < 32) and (($_POST['IIN'][4].$_POST['IIN'][5]*1) > 0)) ){
    $_SESSION['Error'] = True;
    $_SESSION['IIN'] = $_POST['IIN'];
    if($_SESSION['IIN'][6]== '1'){
        $_SESSION['Year'] = '18'.$_SESSION['IIN'][0].$_SESSION['IIN'][1]; 
        $_SESSION['Floor'] = 'Man';
    }
    elseif ($_SESSION['IIN'][6]== '2') {
        $_SESSION['Year'] = '18'.$_SESSION['IIN'][0].$_SESSION['IIN'][1]; 
        $_SESSION['Floor'] = 'Female';
    }
    elseif ($_SESSION['IIN'][6]== '3') {
        $_SESSION['Year'] = '19'.$_SESSION['IIN'][0].$_SESSION['IIN'][1]; 
        $_SESSION['Floor'] = 'Man';
    }
    elseif ($_SESSION['IIN'][6]== '4') {
        $_SESSION['Year'] = '19'.$_SESSION['IIN'][0].$_SESSION['IIN'][1]; 
        $_SESSION['Floor'] = 'Female';
    }
    elseif ($_SESSION['IIN'][6]== '5') {
        $_SESSION['Year'] = '20'.$_SESSION['IIN'][0].$_SESSION['IIN'][1]; 
        $_SESSION['Floor'] = 'Man';
    }
    elseif ($_SESSION['IIN'][6]== '6') {
        $_SESSION['Year'] = '20'.$_SESSION['IIN'][0].$_SESSION['IIN'][1]; 
        $_SESSION['Floor'] = 'Female';
    }
    $_SESSION['Month'] = $_SESSION['IIN'][2].$_SESSION['IIN'][3];
    $_SESSION['Day'] = $_SESSION['IIN'][4].$_SESSION['IIN'][5];
}
else {
    $_SESSION['Error'] = false;
}







header("Location:index.php");
?>