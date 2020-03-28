<?php
require_once "..\dbconfigclass.php";
require_once "Class_request.php";
$Requests=new Request();
$BD=$Requests->getAllRequests();
$title='Request';
require_once'../header.php'
?>

<div class="container">
    <div class="create">
        <div class="container">
            <div class="table__text" >
                <?php
                ?> 
                <table id="example" class="table" style="width:80%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>surname</th>
                            <th>Created_AT</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($BD as $key => $value){?>
                            <tr >
                                <td><?php echo $value['Id']?></td>                       
                                <td class="table_line"><?php echo $value['IName']?></td>
                                <td><?php echo $value['FName']?></td>
                                <td><?php echo $value['Created_AT']?></td>
                                <td>
                                    <a class="btn update" href="../insurance_policy/consider.php?ID=<?php echo $value['Id']?>">Рассотреть</a>
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
                            <th>Created_AT</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!--/.table__text-->
        </div><!--/.container-->   
    </div>
</div>

<?php
require_once'../footer.php';
?>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
} );
</script> 