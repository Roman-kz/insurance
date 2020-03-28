<?php
require_once "..\dbconfigclass.php";
require_once "Class_workers.php";
$Worker=new Worker();
$Id=$_GET['ID'];
$BD=$Worker->getWorkersByID($Id);
$title='Update Worker';
require_once'../header.php'
?>

<div class="container">
    <div class="create_forma">
        <form class="forma1" method="POST" action="Workers_process.php">  

            <div class="line__forma">
                <label>Имя</label>
                <input type="text"  name="IName" value="<?php echo $BD->IName ?>" >
            </div>

            <div class="line__forma">
                <label>Фамилия</label>
                <input type="text"  name="FName"  placeholder="Фамилия" value="<?php echo $BD->FName ?>">
            </div>

            <div class="line__forma">
                <label>Очество</label>
                <input type="text"  name="OName"  placeholder="Отчество" value="<?php echo $BD->OName ?>">
            </div>

            <div class="line__forma">
                <label>ИИН</label>
                <input type="text" name="IIN"  placeholder="ИИН" value="<?php echo $BD->IIN ?>">
            </div>

            <div class="line__forma">
                <label>Номер паспорта</label>
                <input type="text" name="Position"  placeholder="Номер паспорта" value="<?php echo $BD->Position ?>">
            </div>

            <div class="line__forma">
                <label>Дата рождения</label>
                <input  type="date" name="DOB"  placeholder="Дата рождения" value="<?php echo $BD->DOB ?>">
            </div>

            <div class="line__forma">
                <label>Номер телефона</label>
                <input type="text" name="Phone"  placeholder="Номер телефона" value="<?php echo $BD->Phone ?>">
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