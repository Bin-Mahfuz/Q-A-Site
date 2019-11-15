<?php include 'inc/header.php';?>
<?php include 'lib/database.php';?>

<?php
if(!isset($_GET['id'])||$_GET['id']==NULL){
    header ("Location:404.php");
}else{
    $id=$_GET['id'];
}
?>


<?php 
$db=new Database(); 
    if(isset($_POST['ans']))
{
    $post =mysqli_real_escape_string($db->link, $_POST['post_id']);
    $writer =mysqli_real_escape_string($db->link, $_POST['writer']);
    $userid =mysqli_real_escape_string($db->link, $_POST['userid']);
    $headline =mysqli_real_escape_string($db->link, $_POST['headline']);
    $answer =mysqli_real_escape_string($db->link, $_POST['answer']);
    if($writer==''||$headline==''||$answer==''){
        $error= "Required Field";
    }else{
        $info="INSERT INTO tb_ans1(post_id,writer,userid,headline,answer)VALUES('$post','$writer','$userid','$headline','$answer')";
        $create=$db->insert($info);
        if($create){
            echo "<span style='color:green'>Post request is successful.</span>";
        }else{
            echo "<span style='color:red'>Data not inserted successfuly.</span>";

        }
    }
    
}   
?>
<div class="panel panel-default">
    <div class="panel-heading">
      <h2>Your Answer</h2>
    </div>

   <div class="panel-body">
   <div style="max-width:600px;margin:0 auto">
        <form action=" " method="POST">

          <div class="form-group">
                <label for="post_id">Postid: <?php echo $id;?></label>
                <select id="select" name="post_id" class="form-control">
                    <option>Select postid</option>
       
                            <?php
                                $query = "SELECT * FROM tb_post1";
                                $postid= $db->select($query);
                                if($postid){
                                    while ($resultid=$postid->fetch_assoc()){
                            ?>
                                        <option value="<?php echo $resultid['id'];?>"><?php echo $resultid['id'];?></option>
                                <?php } }?>

                </select>
            </div>   

                <div class="form-group">
                    <label for="writer">Writer Name</label>
                    <input type ="text" id="writer" name="writer" class="form-control"/>
                </div>
           
                <div class="form-group">
                    <label for="userid"></label>
                    <input type="text" id="userid" name="userid" value="<?PHP if(isset($_SESSION['id'])){echo $_SESSION['id'];}?>">
                </div>

                <div class="form-group">
                    <label for="headline"></label>
                    <input type="text" id="headline" name="headline" class="form-control">
                </div>

                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea name="answer" row="45" cols="94" style="width:100%;"class="form-control" ></textarea>
                </div>
                <button type="submit" name="ans" class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
</div>
<?php include 'inc/footer.php';?>