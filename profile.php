<?php include 'inc/header.php';?>
<?php include 'helpers/format.php';?>
<?php include 'lib/database.php';?>

<?php
if(!isset($_SESSION['id'])||$_SESSION['id']==NULL){
    header ("Location:404.php");
}else{
    $id=$_SESSION['id'];
}
?>

<?php
$db= new Database();
$fm=new Format();
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Questions of <?php echo Session::get('Uname');?><span class="pull-right"><a class="btn btn-primary " href="addpost.php?id=<?php echo $_SESSION['id'];?>">Add Question</a>  <a class="btn btn-primary " href="pendingrequest.php?id=<?php echo $_SESSION['id'];?>">Review Ans</a></span></h2>
    </div>

    <div class="panel-body">
        <div style="max-width:600px;margin:0 auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="20%">Title</th>
                        <th width="15%">Category</th>
                        <th width="15%">Question</th>
                        <th width="20%">Author</th>
                        <th width="10%">Userid</th>
                        <th width="10%">Date</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                            $query="SELECT * FROM tb_post1 WHERE user=$id";
                            $post= $db->select($query);
                            if($post){
                                while ($result=$post->fetch_assoc()){
                        ?>
                                    <tr>
                                        <td><?php echo $result['title'];?> </td>
                                        <td><?php echo $result['cat_id'];?> </td>
                                        <td><?php echo $fm->textShorten($result['body'],100);?> </td>
                                        <td><?php echo $result['author'];?> </td>
                                        <td><?php echo $result['user'];?></td>
                                        <td><?php echo $fm->FormatDate ($result['date']);?> </td>
                                        <td><a href="update.php?editpostid=<?php echo $result['id'];?>">Edit</a> 
    
                                    </tr>
                            <?php } } ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>