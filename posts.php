<?php  
include 'lib/database.php';
include 'helpers/format.php';
include 'inc/header.php';
?>

<?php
if(!isset($_GET['id'])||$_GET['id']==NULL){
    header ("Location:404.php");
}else{
    $id=$_GET['id'];
}
?>

<?php

$db= new Database();
$fm=new Format();

?>

<div class="panel panel-default">
    <?php
     $query = "SELECT * FROM tb_post1 WHERE id=$id";
     $post= $db->select($query);
        if($post){
            while ($result=$post->fetch_assoc()){

    ?>
        <div class="panel-heading">
            <h2>QUESTION</h2>

            <h2><?php echo $result['title'];?></h2>
            <h4><?php echo $fm->FormatDate($result['date']);?><span class="pull-right">By <a href="#"><?php echo $result['author'];?></a></span></h4>
        </div>

        <div class="panel-body">
            <?php echo $result['body'];?>
        </div>
    <?php } ?><!--end while-->
    <?php } ?>
</div>

<!---fetch answer--->
<div class="panel panel-default">
        <div class="panel-heading">
            <h2>ANSWERS</h2>
        </div>
<?php
    $query = "SELECT * FROM tb_ans1 WHERE post_id=$id AND status=1";
    $acceptedAns= $db->select($query);
    if($acceptedAns){
        while ($outcome=$acceptedAns->fetch_assoc()){
?>
            <div class="panel-heading">
                <h4><?php echo $fm->FormatDate($outcome['date']);?><span class="pull-right">By <a href="#"><?php echo $outcome['writer'];?></a></span></h4>
            </div>

                <div class="panel-body">
                    <?php echo $outcome['answer'];?>
                </div>
        <?php } ?><!--end while-->
    <?php } ?>
</div>

<?php
if(isset($_POST['ans'])){
    $post =mysqli_real_escape_string($db->link, $_POST['post_id']);
    $writer =mysqli_real_escape_string($db->link, $_POST['writer']);
    $userid =mysqli_real_escape_string($db->link, $_POST['userid']);
    $answer =mysqli_real_escape_string($db->link, $_POST['answer']);
    if($writer==''||$answer==''){
        $error= "Required Field";
    }else{
        $info="INSERT INTO tb_ans1(post_id,writer,userid,answer)VALUES('$post','$writer','$userid','$answer')";
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
        <h2>Write Answer</h2>
    </div>

    <div class="panel-body">
    <div style="max-width:600px;margin:0 auto">
        <form action=" " method="POST">

            <div class="form-group">
                <label for="post_id"></label>
                <input type="hidden" id="post_id" name="post_id" value="<?php echo $id;?>">
            </div>

            <div class="form-group">
                <label for="writer">Writer Name</label>
                <input type ="text" id="writer" name="writer" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="userid"></label>
                <input type="hidden" id="userid" name="userid" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];}?>">
            </div>

            <div class="form-group">
                <label for="answer">Answer</label>
                <textarea name="answer" row="45" cols="94" style="width:100%;"class="form-control" ></textarea>
            </div>

            <button type="submit" name="ans" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<?php include 'inc/footer.php';?>
