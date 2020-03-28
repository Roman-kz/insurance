<?php
if(isset($_POST['Action'])){
    $Action=$_POST['Action'];
}
if(isset($_POST['ID'])){
    $ID=$_POST['ID'];
}
if(isset($_POST['IName'])){
    $IName=$_POST['IName'];
}
if(isset($_POST['FName'])){
    $FName=$_POST['FName'];
}
if(isset($_POST['OName'])){
    $OName=$_POST['OName'];
}
if(isset($_POST['IIN'])){
    $IIN=$_POST['IIN'];
}
if(isset($_POST['PassNum'])){
    $PassNum=$_POST['PassNum'];
}
if(isset($_POST['DOB'])){
    $DOB=$_POST['DOB'];
}
if(isset($_POST['Phone'])){
    $Phone=$_POST['Phone'];
}

require_once "..\dbconfigclass.php";
require_once "Class_customer.php";
$customers=new customer();
switch ($Action){
    case 'create':
        $customers->Create($IName, $FName, $OName, $IIN, $PassNum, $DOB, $Phone);
        header("Location:create.php");
    break;

    case 'delete':
        $customers->delete($ID);
        header("Location:index.php");   
    break;

    case 'update':
        $customers->update($ID, $IName, $FName, $OName, $IIN, $PassNum, $DOB, $Phone);
        echo 123;
        header("Location:index.php");   
    break;
}
?>


