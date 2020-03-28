<?php
require_once "..\dbconfigclass.php";
require_once "Class_insurance_policy.php";
$InsurancePolicy=new InsurancePolicy();
$BD=$InsurancePolicy->getAllInsurancePolicys();
$title='Insurance policy';
require_once'../header.php';
?>

<div class="container">
    <div class="create">  
        <a class="btn btn--create" href="create.php">New Insurances</a>
    </div>
</div>
<div class="container">
    <div class="table__text" >
        <table id="example" class="table" style="width:80%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>Вид страховки</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($BD as $key => $value){?>
                    <tr>
                        <td><?php echo $value['Id_Policies']?></td>
                        <td><?php echo $value['customers_FName'].' '.$value['customers_IName'].' '.$value['customers_OName']?></td>                       
                        <td><?php echo $value['Name_Policie']?></td>
                        <td><?php echo $value['Date_From']?></td>
                        <td><?php echo $value['Date_To']?></td>
                        <td>
                            <div class="action">
                                <a class="btn update" href="update.php?ID=<?php echo $value['Id_Policies']?>">Update</a>
                                <div class="">
                                    <form method="POST" action="insurances_process.php">
                                        <input type="hidden" name="ID" value="<?php echo $value['Id_Policies']?>">
                                        <input type="hidden" name="Action" value="delete">
                                        <input class="delete" type="submit" value="Delete"></input>
                                    </form >
                                </div>
                            </div><!--/.Action-->
                        </td>
                    </tr>
                    <?php
                }
                unset($value);
                ?>     
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>Вид страховки</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div><!--/.table__text-->
</div><!--/.container-->
    
<?php
require_once'../footer.php';
?>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
} );
</script>