<?php  
include 'inc/header.php';
include 'lib/database.php';
include 'helpers/format.php';
?>

<?php
$db= new Database();
$fm=new Format();
?>

<div class="panel panel-default">
    <?php
        $query = "SELECT * FROM tb_post1";
        $post= $db->select($query);
        if($post){
            while ($result=$post->fetch_assoc()){
    ?>
                <div class="panel-heading">
                    <h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h2>
                    <h4><?php echo $fm->FormatDate($result['date']);?><span class="pull-right">By <a href="#"><?php echo $result['author'];?></a></span></h4>
                </div>

                <div class="panel-body">
                    <?php echo $fm->textShorten($result['body']);?>
                        <div class="btn btn-primary " style="background-color:#fff";>
                            <a href="posts.php?id=<?php echo $result['id'];?>">Read More</a>
                        </div>
                </div>
            <?php } ?><!--end while-->
    <?php } ?>
</div>
<?php include 'inc/footer.php';?>
