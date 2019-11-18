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
        <h2>Question's Answers<span class="pull-right"><a class="btn btn-primary" href="addpost.php?id=<?php echo $_SESSION['id'];?>">Add Question</a></span></h2>
    </div>
    <div class="panel-body,pull-left">
        <div style="max-width:600px;margin:0 auto">
        <form action= " " method ="POST">
            <table class="table table-s triped">
                <thead>
                    <tr>
                        <th width="20%">Question</th>
                        <th width="40%">Answer</th>
                        <th width="20%">Writer</th>
                        <th width="5%">post_id</th>
                        <th width="5%">Date</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>

                    <tbody>
                        <?php
                             $query="SELECT tb_ans1.*,tb_post1.title FROM tb_ans1
                             INNER JOIN tb_post1
                             ON tb_ans1.post_id=tb_post1.id
                             WHERE tb_post1.user=$id
                             ORDER BY tb_ans1.date DESC"; 

                              $post= $db->select($query);
                              if($post){
                                while ($result=$post->fetch_assoc()){
                        ?>
                                <tr>
                                    <td><?php echo $result['title'];?> </td>
                                    <td><?php echo $fm->textShorten($result['answer']);?> </td>
                                    <td><?php echo $result['writer'];?> </td>
                                    <td> <?php echo $result['post_id'];?></td>
                                    <td><?php echo $fm->FormatDate ($result['date']);?> </td>
                                <td>
                                    <a href="?=<?php echo $result['id'];?>"></a>
                                
                                      <?php
                                            if(isset($result['id'])){
                                               $ansid=$result['id'];
                                            }
                                            
                                        ?>  

                                      <?php if(isset($_POST['accept'])){
   
                                              $upquery="UPDATE tb_ans1
                                                  SET
                                                  status=1
                                                  WHERE id =$ansid";
                                              $changedata=$db->update($upquery);
                                            }
                                        ?> 
                                      <button type="submit" name="accept" class=" btn btn-primary " data-toggle="button" aria-pressed="false" autocomplete="off">Accept</button>
                                </td>
    
                                </tr>
                           <?php } } ?>
                           

                    </tbody>
            </table>
            </form>
        </div>

    </div>

</div>
<?php include 'inc/footer.php';?>





