<?php
$title='New insurance';
require_once'../header.php'
?>

<div class="container">  
    <div class="create_forma">
        <form class="forma1" method="POST" action="insurances_process.php">  

            <div class="line__forma">
                <label>Названия</label>
                <input type="text"  name="Name_Policie"  >
            </div>

            <div class="line__forma">
                <label>Min_amount</label>
                <input type="text"  name="Min_amount"  placeholder="Min_amount">
            </div>

            <div class="line__forma">
                <label>Min_Date</label>
                <input type="text"  name="Min_Date"  placeholder="Min_Date">
            </div>

            <input type="hidden" name="Action" value="create">
            <input type="submit" value="Сохранить" class="sub_cre">   
        </form>
    </div>
</div>
        
<?php
require_once'../footer.php';
?>