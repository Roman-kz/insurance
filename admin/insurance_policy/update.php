<?php
require_once "..\dbconfigclass.php";
require_once "Class_insurance_policy.php";
$InsurancePolicy =new InsurancePolicy();
$Id=$_GET['ID'];
$BD=$InsurancePolicy->getInsurancePolicyByID($Id);
$title='Update Insurance policy';
require_once'../header.php'
?>

<div class="container">
    
    
    <div class="create_forma">
        <form class="forma1" method="POST" action="insurances_process.php">  

            <div class="line__forma">
                <label>Сумма</label>
                <input type="text"  name="Amount" value="<?php echo $BD->Amount?>" >
            </div>

            <div class="line__forma">
                <label>Date_From</label>
                <input type="text" name="Date_From"  placeholder="Date_From" value="<?php echo $BD->Date_From ?>">
            </div>

            <div class="line__forma">
                <label>Date_To</label>
                <input type="text" name="Date_To"  placeholder="Date_To" value="<?php echo $BD->Date_To ?>">
            </div>

            <input type="hidden" name="ID" value="<?php echo $BD->Id_Policies ?>">
            <input type="hidden" name="Action" value="update">
            <input type="submit" value="Сохранить" class="sub_cre">

            <div class="line__forma">
                <p>ФИО клиента</p>
                <p><?php echo $BD->customers_FName.' '.$BD->customers_IName.' '.$BD->customers_OName?></p>
            </div>

            <div class="line__forma">
                <p>Номер</p>
                <p><?php echo $BD->customers_Phone ?></p>
            </div>

            <div class="line__forma">
                <p>День рождения</p>
                <p><?php echo $BD->customers_DOB ?></p>
            </div>

            <div class="line__forma">
                <p>ИИН</p>
                <p><?php echo $BD->customers_IIN ?></p>
            </div>

            <div class="line__forma">
                <p>Номер паспорта</p>
                <p><?php echo $BD->customers_PassNum ?></p>
            </div>

            <div class="line__forma">
                <p>ФИО сотрудника</p>
                <p><?php echo $BD->worker_FName.' '.$BD->worker_IName.' '.$BD->worker_OName?></p>
            </div>

               
        </form>
    </div>
</div>
        
<?php
require_once'../footer.php';
?>