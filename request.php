<?php include 'inc/header.php';?>
<?php include 'lib/database.php';?>

<?php
if(!isset($_GET['reqpostid'])||$_GET['reqpostid']==NULL){
    header ("Location:404.php");
}else{
    $id=$_GET['reqpostid'];
}
?>

<?php
  $db=new Database();
  $query="SELECT * FROM tb_ans1 where id=$id";
  $view=$db->select($query)->fetch_assoc();
  if(isset($_POST['submit'])){
            $upquery="UPDATE tb_ans1
            SET
            status=1
            WHERE id ='$id'";
            $changedata=$db->update($upquery);
   }
?>
<?php
    if (isset($_POST['delete']))
    {
    $query="DELETE FROM tb_ans1 WHERE id=$id";
    $remove=$db->delete($query);
    }
    ?>
  
    
<?php
    if(isset($error))
   {
       echo "<span style='color:red'>".$error."</span>";
    }
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Pending Request <?php echo Session::get('name');?><span class="pull-right"><a class="btn btn-primary" href="pendingrequest.php">Back</a></span></h2>
    </div>
        <div class="panel-body">
            <div style="max-width:600px;margin:0 auto">
            <form action=" "method="POST">
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="80%">Answer</th>
                                <th width="20%">Writer</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $view['answer'];?> </td>
                            <td><?php echo $view['writer'];?> </td>
                                <td>
                                      <button type="submit" name="submit" class="btn btn-success">Accept</button>
                                </td>
                        </tr>
                </table>
                </form>
            </div>
        </div>
</div>
<?php include 'inc/footer.php';?>


