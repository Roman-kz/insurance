<?php
require_once "..\dbconfigclass.php";
require_once "Class_insurance.php";
$insurances =new Insurance();
$Id=$_GET['ID'];
$BD=$insurances->getInsuranceByID($Id);
$title='Update insurance';
require_once'../header.php';
?>
<div class="container">
    
    
    <div class="create_forma">
        <form class="forma1" method="POST" action="insurances_process.php">  

            <div class="line__forma">
                <label>Названия</label>
                <input type="text"  name="Name_Policie" value="<?php echo $BD->Name_Policie?>" >
            </div>

            <div class="line__forma">
                <label>Min_amount</label>
                <input type="text" name="Min_amount"  placeholder="Min_amount" value="<?php echo $BD->Min_amount ?>">
            </div>

            <div class="line__forma">
                <label>Min_Date</label>
                <input type="text" name="Min_Date"  placeholder="Min_Date" value="<?php echo $BD->Min_Date ?>">
            </div>

            <div class="line__forma">
                <p>Создан</p>
                <p><?php echo $BD->Created_AT ?></p>
            </div>

            <div class="line__forma">
                <p>Изменен</p>
                <p><?php echo $BD->UpDated_AT ?></p>
            </div>

            <input type="hidden" name="ID" value="<?php echo $BD->Id ?>">
            <input type="hidden" name="Action" value="update">
            <input type="submit" value="Сохранить" class="sub_cre">   
        </form>
    </div>
</div>
        
<?php
require_once'../footer.php';
?>