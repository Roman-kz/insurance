<?php
require_once "..\dbconfigclass.php";
require_once "Class_workers.php";
$customers=new Worker();
$BD=$customers->getAllWorkers();
$title='Workers';
require_once'../header.php'
?>

<div class="container">
    <div class="create">
        <a class="btn btn--create" href="create.php">New Customer</a>
    </div>
</div>
<div class="container">
    <div class="table__text" >
        <table id="example" class="table" style="width:80%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>surname</th>
                    <th>IIN</th>
                    <th>DOB</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($BD as $key => $value){?>
                    <tr>
                        <td><?php echo $value['Id']?></td>                       
                        <td><?php echo $value['IName']?></td>
                        <td><?php echo $value['FName']?></td>
                        <td><?php echo $value['IIN']?></td>
                        <td><?php echo $value['DOB']?></td>
                        <td>
                            <div class="action">
                                <a class="btn update" href="update.php?ID=<?php echo $value['Id']?>">Update</a>
                                <div class="">
                                    <form method="POST" action="Workers_process.php">
                                        <input type="hidden" name="ID" value="<?php echo $value['Id']?>">
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
                    <th>Name</th>
                    <th>surname</th>
                    <th>IIN</th>
                    <th>DOB</th>
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