<?php
if(isset($_POST['Action'])){
    $Action=$_POST['Action'];
}
if(isset($_POST['ID'])){
    $ID=$_POST['ID'];
}
if(isset($_POST['Amount'])){
    $Amount=$_POST['Amount'];
}
if(isset($_POST['Date_From'])){
    $Date_From=$_POST['Date_From'];
}
if(isset($_POST['Date_To'])){
    $Date_To=$_POST['Date_To'];

}
require_once "..\dbconfigclass.php";
require_once "Class_insurance_policy.php";
$InsurancePolicy=new InsurancePolicy();
switch ($Action){
    case 'create':
        $InsurancePolicy->Create($Name_Policie, $Min_amount, $Min_Date);
        header("Location:create.php");
    break;

    case 'delete':
        $InsurancePolicy->delete($ID);
        header("Location:index.php");   
    break;

    case 'update':
        $InsurancePolicy->update($ID, $Amount, $Date_From, $Date_To);
        header("Location:index.php");   
    break;
}
?>


