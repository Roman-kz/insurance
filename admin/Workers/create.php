<?php
$title='New worker';
require_once'../header.php';
?>

<div class="container">
    <div class="create_forma">
        <form class="forma1" method="POST" action="Workers_process.php">  

            <div class="line__forma">
                <label>Имя</label>
                <input type="text"  name="IName"  >
            </div>

            <div class="line__forma">
                <label>Фамилия</label>
                <input type="text"  name="FName"  placeholder="Фамилия">
            </div>

            <div class="line__forma">
                <label>Очество</label>
                <input type="text"  name="OName"  placeholder="Отчество">
            </div>

            <div class="line__forma">
                <label>ИИН</label>
                <input type="text" name="IIN"  placeholder="ИИН">
            </div>

            <div class="line__forma">
                <label>Должность</label>
                <input type="text" name="Position"  placeholder="Должность">
            </div>

            <div class="line__forma">
                <label>Дата рождения</label>
                <input  type="date" name="DOB"  placeholder="Дата рождения">
            </div>

            <div class="line__forma">
                <label>Номер телефона</label>
                <input type="text" name="Phone"  placeholder="Номер телефона">
            </div>

            <input type="hidden" name="Action" value="create">
            <input type="submit" value="Сохранить" class="sub_cre">   
        </form>
    </div>
</div>
        
<?php
require_once'../footer.php';
?>