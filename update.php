<?php include 'inc/header.php';?>
<?php include 'lib/database.php';?>

<?php
if(!isset($_GET['editpostid'])||$_GET['editpostid']==NULL){
    header ("Location:404.php");
}else{
    $id=$_GET['editpostid'];
}
?>

<?php
$db=new Database();
$query="SELECT * FROM tb_post1 where id=$id";
$view=$db->select($query)->fetch_assoc();

if(isset($_POST['submit'])){
    $title =mysqli_real_escape_string($db->link,$_POST['title']);
    $author =mysqli_real_escape_string($db->link,$_POST['author']);
    $body =mysqli_real_escape_string($db->link,$_POST['body']);
    
    $upquery="UPDATE tb_post1
            SET
            title='$title',
            author='$author',
            body='$body'
            WHERE id ='$id'";
            $changedata=$db->update($upquery);
            if($changedata){
                echo "<span style='color:green'>Update successfuly.</span>";
            }else{
                echo "<span style='color:red'>Failed to update.</span>";
            }
}
    
?>
<?php
if (isset($_POST['delete'])){
    $query="DELETE FROM tb_post1 WHERE id=$id";
    $remove=$db->delete($query);
}
?>
<?php
    if(isset($error)){
       echo "<span style='color:red'>".$error."</span>";
    }
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Admin Panel <?php echo Session::get('Uname');?><span class="pull-right"><a class="btn btn-primary" href="profile.php">Back</a></span></h2>
    </div>

    <div class="panel-body">
        <div style="max-width:600px;margin:0 auto">
            <form action=" "method="POST">

                <div class="form-group"> 
                    <label for="name">Title</label>
                    <input type ="text" id="title" name="title" class="form-control" value="<?php echo $view['title'];?>"/>
                </div>

                <div class="form-group"> 
                    <label for="name">Author</label>
                    <input type ="text" id="author" name="author" class="form-control" value="<?php echo $view['author'];?>"/>
                </div>
                <div class="form-group">
                    <label for="username">Questions</label>
                    <textarea name="body" row="45" cols="94" style="width:100%;"class="form-control" ><?php echo $view['body'];?></textarea>
                </div>
                    <tr>
                        <td> </td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-success">Cancel</button>
                            
                        </td>
                    </tr>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>


