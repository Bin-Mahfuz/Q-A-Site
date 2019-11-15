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

if(isset($_POST['ask'])){
    $user =mysqli_real_escape_string($db->link, $_POST['user']);
    $author =mysqli_real_escape_string($db->link, $_POST['author']);
    $title =mysqli_real_escape_string($db->link, $_POST['title']);
    $catid =mysqli_real_escape_string($db->link, $_POST['cat_id']);
    $body =mysqli_real_escape_string($db->link, $_POST['body']);
    if($author==''||$title==''||$catid==''||$body==''){
        $error= "Required Field";
    }else{
        $info="INSERT INTO tb_post1(user,author,title,cat_id,body)VALUES('$user','$author','$title','$catid','$body')";
             $create=$db->insert($info);
        if($create){
                echo "<span style='color:green'>Data inserted successfuly.</span>";
        }else{
            echo "<span style='color:red'>Data not inserted successfuly.</span>";
        }
    }
    
}   
?>
<div class="panel panel-default">
    <div class="panel-heading">
       <h2>Questions</h2>
    </div>

        <div class="panel-body">
            <div style="max-width:600px;margin:0 auto">
                <form action=" " method="POST">

                    <div class="form-group">
                        <label for="user"></label>
                        <input type="hidden" id="user" name="user" class="form-control" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id'];}?>">
                    </div> 

                    <div class="form-group">
                        <label for="author">Your Name</label>
                        <input type ="text" id="author" name="author" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type ="text" id="title" name="title" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="cat_id">Ctaegory</label>
                            <select id="select" name="cat_id" class="form-control">
                                <option>Select Category</option>

                                    <?php
                                        $query = "SELECT * FROM tb_cat";
                                        $category= $db->select($query);
                                        if($category){
                                            while ($result=$category->fetch_assoc()){
                                    ?>
                                                <option value="<?php echo $result['id'];?>"><?php echo $result['catName'];?></option>
                                    <?php } }?>

                            </select>
                    </div>    

                    <div class="form-group">
                        <label for="body">Question</label>
                        <textarea name="body" row="45" cols="94" style="width:100%;"class="form-control" ></textarea>
                    </div>
                        <button type="submit" name="ask" class="btn btn-success">Submit</button>

                </form>
            </div>
        </div>
</div>
<?php include 'inc/footer.php';?>