<?php
if(isset($_POST['Action'])){
    $Action=$_POST['Action'];
}
if(isset($_POST['ID'])){
    $ID=$_POST['ID'];
}
if(isset($_POST['Name_Policie'])){
    $Name_Policie=$_POST['Name_Policie'];
}
if(isset($_POST['Min_amount'])){
    $Min_amount=$_POST['Min_amount'];
}
if(isset($_POST['Min_Date'])){
    $Min_Date=$_POST['Min_Date'];

}

require_once "..\dbconfigclass.php";
require_once "Class_insurance.php";
$Insurances=new Insurance();
switch ($Action){
    case 'create':
        $Insurances->Create($Name_Policie, $Min_amount, $Min_Date);
        header("Location:create.php");
    break;

    case 'delete':
        $Insurances->delete($ID);
        header("Location:index.php");   
    break;

    case 'update':
        $Insurances->update($ID, $Name_Policie, $Min_amount, $Min_Date);
        header("Location:index.php");   
    break;
}
?>


